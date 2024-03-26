<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Http\Resources\TeacherCollection;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function getTeachers() {
        return new TeacherCollection(Teacher::all());
    }

    public function getTeacher($id) {
        return Teacher::find($id);
    }

    public function createTeacher (TeacherRequest $request) {
        $data = $request->validated();
        Teacher::create([
            'nombreCompleto' => $data['nombreCompleto'],
            'gradoAcademico' => $data['gradoAcademico'],
        ]);

        return [
            "message" => "Docente creado correctamente"
        ];
    }

    public function editTeacher ($id, Request $request) {
        
        $request->validate([
            "nombreCompleto" => ["required","string","unique:teachers,nombreCompleto,".$id],
            "gradoAcademico" => ["required"]
        ],[
            "nombreCompleto.required" => "El nombre es requerido",
            "nombreCompleto.unique" => "Ya existe un nombre con ese registro",
            "gradoAcademico" => "El grado academico es requerido"
        ]);
        $teacher = Teacher::find($id);
        $teacher->nombreCompleto = $request->nombreCompleto;
        $teacher->gradoAcademico = $request->gradoAcademico;
        $teacher->save();
        return [
            "message" => "Docente editado correctamente"
        ];
    }

    public function deleteTeacher ($id) {
        
        $teacher = Teacher::find($id);
        $teacher->delete();
        return [
            "message" => "Docente eliminado correctamente"
        ];
    }
}
