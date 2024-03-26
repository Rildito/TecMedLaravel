<?php

namespace App\Http\Resources;

use App\Models\Mentions;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "nombre" => $this->nombre,
            "mencion" => [
                "nombre" => $this->mention->nombre,
                "id" => $this->mention->id
            ]
        ];
    }
}
