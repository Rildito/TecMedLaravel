<?php

namespace App\Http\Controllers;

use App\Http\Resources\CollaborationsCollection;
use App\Http\Resources\CollaboratorCorrespondenceResource;
use App\Models\Collaborations;
use App\Models\Correspondence;
use App\Models\Document;
use App\Models\Response;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CollaborationsController extends Controller
{

    public function getCollaborators($id)
    {
        return new CollaborationsCollection(Collaborations::with(['correspondence'])->with('usuarioCreador')->with('usuarioColaborador')
            ->with(['responses.document'])
            ->where('correspondence_id', $id) //::good 
            ->get());
    }

    public function getCollaborator($idCorrespondence, $idUser)
    {

        $correspondencia = Correspondence::find($idCorrespondence);
        $colaboraciones =
            Collaborations::where('correspondence_id', $idCorrespondence)
            ->where('secondary_user_id', $idUser)
            ->with('correspondence.responses', function ($query) use ($idUser, $correspondencia) {
                $query->where('user_id', $idUser)
                    ->orWhere('user_id', $correspondencia->user_id)->orderBy('created_at');
            })
            ->get();

        $colaboracionesOrdenadas = $colaboraciones->sortBy(function ($colaboracion) {
            return optional($colaboracion->correspondence->responses->first())->created_at;
        });

        return new CollaborationsCollection($colaboracionesOrdenadas);
    }

    public function getCollaboratorsCorrespondences($id)
    {
        $colaboraciones = Collaborations::where('secondary_user_id', $id)->with('correspondence')->get();
        foreach ($colaboraciones as $colaboracion) {
            $colaboracion->correspondence->documento_inicial = asset('storage/documentos/' . $colaboracion->correspondence->documento_inicial);
        }

        return $colaboraciones;
    }

    public function getDocumentsCollaborator($id)
    {
        return Collaborations::with(['correspondence.documents'])
            ->where('secondary_user_id', $id)
            ->orWhereHas('correspondence.documents', function ($query) use ($id) {
                $query->where('user_id', '=', $id)
                    ->orWhere(function ($query) use ($id) {
                        $query->where('user_id', '=', DB::raw('collaborations.primary_user_id'))
                            ->where(DB::raw('collaborations.secondary_user_id'), '=', $id);
                    });
            })
            ->get()
            ->orderBy('correspondence.responses.created_at', 'asc')
            ->pluck('correspondence.documents');
        // ->flatten();
    }

    public function addCollaborator(Request $request)
    {
        Collaborations::create([
            'primary_user_id' => $request['primary_user_id'],
            'secondary_user_id' => $request['secondary_user_id'],
            'correspondence_id' => $request['correspondence_id'],
        ]);

        return [
            'message' => 'Colaborador agregado correctamente'
        ];
    }
}
