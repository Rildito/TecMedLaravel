<?php

namespace App\Models;

use App\Http\Resources\SpentCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spent extends Model
{
    protected $fillable = [
        "money_boxes_id",
        "interested_id",
        "fechaCreacion",
        "nro",
        "nroFactura",
        "ingreso",
        "descripcion",
        "gasto"
    ];
    use HasFactory;

    public function interested(){
        return $this->belongsTo(Interested::class);
    }

    public function money_box(){
        return $this->hasOne(MoneyBox::class, 'id');
    }
}
