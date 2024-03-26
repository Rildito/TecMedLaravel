<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitRequest;
use App\Http\Resources\SubjectCollection;
use App\Models\Subject;
use App\Models\Unit;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function getSubjects () {
        return new SubjectCollection(Subject::with('mention')->get());
    }

    public function getSubject ($id) {
        return Subject::with('mention')->find($id);
    }

    public function createSubject (Request $request) {
        
        $data = $request->validate([
            'nombre' => ['required','string','unique:subjects,nombre'],
            'mencion' => ['required','string'],
        ],[
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.unique' => 'Ya existe una materia con ese nombre',
            'mencion.required' => 'La mencion es obligatoria',
        ]);

        Subject::create([
            'nombre' => $data['nombre'],
            'mention_id' => $data['mencion']
        ]);

        return [
            "message" => "Materia creada correctamente"
        ];
    }

    public function editSubject ($id, Request $request) {
        
        $request->validate([
            'nombre' => ['required','string','unique:subjects,nombre,'.$id],
            'mencion' => ['required','string'],
        ],[
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.unique' => 'Ya existe una materia con ese nombre',
            'mencion.required' => 'La mencion es obligatoria',
        ]);
        $subject = Subject::find($id);
        $subject->nombre = $request->nombre;
        $subject->mention_id = $request->mencion;
        $subject->save();
        return [
            "message" => "Materia editada correctamente"
        ];
    }

    public function deleteSubject ($id) {
        
        $subject = Subject::find($id);
        $subject->delete();
        return [
            "message" => "Materia eliminada correctamente"
        ];
    }
}
