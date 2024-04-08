<?php

namespace App\Http\Resources;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array

    {   
        //return parent::toArray($request);

        $materiales = [];

        foreach ($this->materials as $material ) {
            $materialEditado = [
                "id" => $material->id,
                "nombre" => $material->nombre,
                "cantidad" => $material->pivot->cantidad 
            ];
            $materiales[]=$materialEditado;
        };
        
        $ru = '';
        $mencion = '';
        $student = Student::where('user_id','=',$this->user->id)->first();
        if( isset($student) && $this->user_id === $student->user_id) {
            $ru = $this->user->student->ru;
            $mencion = $this->user->student->mention->nombre;
        }else {
            $ru = 'Sin ru';
            $mencion = 'Sin mencion';
        }

        $rutaArchivo = asset('storage/perfiles/' . $this->user->imagen);
        return [
            "id" => $this->id,
            "usuario" => [
                "id" => $this->user->id,
                "ci" => $this->user->ci,
                "nombreCompleto" => $this->user->nombres . ' ' . $this->user->apellidoPaterno . ' ' . $this->user->apellidoMaterno,
                "imagen" => $rutaArchivo,
                "ru" => $ru,
                "mencion" => $mencion 
            ],
            "docente" => [
                "id" => $this->teacher->id,
                "nombreCompleto" => $this->teacher->gradoAcademico . ' ' . $this->teacher->nombreCompleto
            ],
            "materia" => [
                "id" => $this->subject->id,
                "nombreMateria" => $this->subject->nombre
            ],
            "materiales" => $materiales,
            "estado" => $this->estado,
            "descripcion" => $this->descripcion
        ];
    }
}
