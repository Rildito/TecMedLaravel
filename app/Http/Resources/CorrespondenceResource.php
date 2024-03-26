<?php

namespace App\Http\Resources;

use App\Models\Collaborations;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CorrespondenceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        
        $rutaArchivo = asset('storage/documentos/' . $this->documento_inicial);
        // $rutaArchivo = response()->file('storage/documentos/' . $this->documento);
        return [
            'descripcion' => $this->descripcion,
            // 'documento' => $rutaArchivo,
            'documento' => $rutaArchivo,
            'estado' => $this->estado,
            'fechaCreacion' => $this->created_at,
            'fechaEntregado' => $this->fechaEntregado,
            'hojaDeRuta' => $this->hojaDeRuta,
            'id' => $this->id,
            'nombre' => $this->nombre,
            'receptor' => $this->receptor,
            'unit' => $this->unit,
            'user_id' => $this->user_id,
            'tipo' => $this->tipo
        ];
    }
}
