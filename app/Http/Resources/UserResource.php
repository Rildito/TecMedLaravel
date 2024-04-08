<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $rutaArchivo = asset('storage/perfiles/' . $this->imagen);
        return [
            "id" => $this->id,
            "imagen" => $rutaArchivo,
            "nombreCompleto" => $this->nombres . ' ' . $this->apellidoPaterno . ' ' . $this->apellidoMaterno,
            "tipo" => $this->tipo,
            "email" => $this->email,
            "ci" => $this->ci,
        ];
    }
}
