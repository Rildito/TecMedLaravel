<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CollaboratorCorrespondenceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        
        $documentos = [];

        foreach ($this->correspondence->documents as $documento ) {
            $documentoEditado = [
                "id" => $documento->id,
                "documento" =>  asset('/storage/documentos/'.$documento->nombreDocumento),
                "fechaSubida" => $documento->fechaSubida, 
                'usuario_creador' => $documento->user_id
            ];
            $documentos[]=$documentoEditado;
        };

        return [
            'id' => $this->id,
            'usuario_creador_id' => $this->primary_user_id,
            'correspondencia' => [
                'id' => $this->correspondence->id,
                'nombre' => $this->correspondence->nombre,
                'fechaCreacion' => $this->correspondence->fechaCreacion,
                'descripcion' => $this->correspondence->descripcion,
            ],
            'documentos' => $documentos
        ];

        
        //     "correspondence": {
        //       "id": 16,
        //       "nombre": "Documento prueba",
        //       "fechaCreacion": "2024-02-18",
        //       "hojaDeRuta": "12312-VC",
        //       "descripcion": "Esta es una descripcion de prueba",
        //       "estado": "Activo",
        //       "receptor": null,
        //       "created_at": "2024-02-18T20:22:40.000000Z",
        //       "updated_at": "2024-02-18T20:34:08.000000Z",
        //       "unit_id": 3,
        //       "tipo": "recibida",
        //       "user_id": 1,
        //       "documents": [
        //         {
        //           "id": 1,
        //           "nombreDocumento": "mDq5HrRmhdKUPFrXzGhdyiS43X4CxVexJe3c.pdf",
        //           "fechaSubida": "2024-02-18",
        //           "correspondence_id": 16,
        //           "user_id": 1,
        //           "created_at": "2024-02-18T20:22:40.000000Z",
        //           "updated_at": "2024-02-18T20:34:08.000000Z"
        //         }
        //       ]
        //     }
        //   }
    }
}
