<?php

namespace App\Http\Resources;

use App\Models\Recharge;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MoneyBoxResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // $recargas = Recharge::all();
        // $lastRecarga = $recargas->last();
        // $spentsCondicionados = [];
        // foreach ($this->spents as $spent) {
        //     if ($spent->created_at >= $lastRecarga->created_at) {
        //         $spents[]=$spent;
        //     }
        // }
        // return [
        //     "spents" => $this->data[0]['spents']
        // ];
        return parent::toArray($request);
    }
}
