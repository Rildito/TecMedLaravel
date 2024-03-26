<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correspondence extends Model
{
    protected $fillable = [
        'unit_id',
        "fechaCreacion",
        "hojaDeRuta",
        "nombre",
        "descripcion",
        "documento",
        "estado",
        "receptor",
        "tipo",
        "user_id",
        'fechaEntregado',
        'estadoAnterior'
    ];

    public function unit() {
        return $this->hasOne(Unit::class,'id','unit_id');
    }

    public function documents () {
        return $this->hasMany(Document::class,'correspondence_id');
    }

    public function responses () {
        return $this->hasMany(Response::class,'correspondence_id');
    }
    use HasFactory;
}
