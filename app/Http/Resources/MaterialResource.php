<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MaterialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $rutaArchivo = asset('storage/materiales/' . $this->imagen);
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'cantidad_disponible' => $this->cantidad_disponible,
            'cantidad_utilizada' => $this->cantidad_utilizada,
            'estado' => $this->estado,
            'descripcion' => $this->descripcion,
            'imagen' => $rutaArchivo
        ];
    }
}
