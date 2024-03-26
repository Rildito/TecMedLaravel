<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterestedRequest;
use App\Http\Resources\InterestedCollection;
use App\Models\Interested;
use Illuminate\Http\Request;

class InterestedController extends Controller
{
    public function getInteresteds() {
        return new InterestedCollection(Interested::all());
    }

    public function getInterested($id) {
        return Interested::find($id);
    }

    public function createInterested (InterestedRequest $request) {
        
        $data = $request->validated();
        
        Interested::create([
            'nombreCompleto' => $data['nombreCompleto'],
            'money_boxes_id' => "1",
        ]);

        return [
            "message" => "Custodio creado correctamente"
        ];
    }

    public function editInterested ($id, Request $request) {
        
        $request->validate([
            'nombreCompleto' => ['required', 'string', 'unique:interesteds,nombreCompleto,'.$id]
        ],[
            'nombreCompleto.required' => "El nombre es obligatorio",
            'nombreCompleto.unique' => "Ya existe un registro con ese nombre",
        ]);
        
        $interested = Interested::find($id);
        $interested->nombreCompleto = $request->nombreCompleto;
        
        //Verificar si se quedara en una caja-chia

        $interested->save();
        return [
            "message" => "Custodio editado correctamente"
        ];
    }

    public function deleteInterested ($id) {
        
        $interested= Interested::find($id);
        $interested->delete();
        return [
            "message" => "Custodio eliminado correctamente"
        ];
    }
}
