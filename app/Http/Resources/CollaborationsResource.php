<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CollaborationsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        $responses = [];
        $responsesGenerales = [];
        foreach ($this->correspondence->responses as $response) {
            $respuestaEditada = [];
            if ($response->user_id === $this->primary_user_id) {
                $respuestaEditada = [
                    "id" => $response->id,
                    "response" => $response->response,
                    "creado" => $response->created_at,
                    "creador" => $response->user_id,
                    "creador_secundario" => $response->user_secondary_id,
                    "documento" => optional($response->document)->id ? [
                        'id' => $response->document->id,
                        'nombreDocumento' => asset('storage/documentos/' . $response->document->nombreDocumento)
                    ] : null,
                ];
                $responsesGenerales[] = $respuestaEditada;
            }
        }

                    // $response->user_secondary_id === $this->primary_user_id)
        foreach ($this->correspondence->responses as $response) {
            if (
                ($response->user_id === $this->secondary_user_id && $response->user_secondary_id === $this->secondary_user_id || (
                        $response->user_id === $this->primary_user_id &&
                        $response->user_secondary_id === $this->secondary_user_id
                    ) || ($response->user_id === $this->primary_user_id &&
                    $response->user_secondary_id === $this->primary_user_id)
                )
            ) {
                $respuestaEditada = [
                    "id" => $response->id,
                    "response" => $response->response,
                    "creado" => $response->created_at,
                    "creador" => $response->user_id,
                    "creador_secundario" => $response->user_secondary_id,
                    "documento" => optional($response->document)->id ? [
                        'id' => $response->document->id,
                        'nombreDocumento' => asset('storage/documentos/' . $response->document->nombreDocumento)
                    ] : null,
                ];
                $responses[] = $respuestaEditada;
            }
        };

        return [
            'id' => $this->id,
            'usuario_creador' => $this->primary_user_id,
            'colaborador' => $this->secondary_user_id,
            'correspondencia' => [
                'id' => $this->correspondence_id,
                'nombre' => $this->correspondence->nombre,
                'fechaCreacion' => $this->correspondence->fechaCreacion,
                'hojaDeRuta' => $this->correspondence->hojaDeRuta,
                'descripcion' => $this->correspondence->descripcion,
                'estado' => $this->correspondence->estado,
                'created_at' => $this->correspondence->created_at
                // 'documentos' => $documentos,
            ],
            'usuarioCreador' => [
                'id' => $this->usuarioCreador->id,
                'nombreCompleto' => $this->usuarioCreador->nombres . ' ' . $this->usuarioCreador->apellidoPaterno . ' ' . $this->usuarioCreador->apellidoMaterno,
                'perfil' => asset('storage/perfiles/' . $this->usuarioCreador->imagen),
            ],

            'usuarioColaborador' => [
                'id' => $this->usuarioColaborador->id,
                'nombreCompleto' => $this->usuarioColaborador->nombres . ' ' . $this->usuarioColaborador->apellidoPaterno . ' ' . $this->usuarioColaborador->apellidoMaterno,
                'perfil' => asset('storage/perfiles/' . $this->usuarioColaborador->imagen),
            ],
            'respuestasGenerales' => $responsesGenerales,
            'respuestas' => $responses,
            // 'respuestas' => $this->responses->map(function ($respuesta) {
            //     return [
            //         'id' => $respuesta->id,
            //         'response' => $respuesta->response,
            //         'created_at' => $respuesta->created_at,
            //         'document' => optional($respuesta->document)->id ? [
            //             'id' => $respuesta->document->id,
            //             'nombreDocumento' => asset('storage/documentos/' . $respuesta->document->nombreDocumento)
            //         ] : null
            //     ];
            // }),

        ];
    }
}
