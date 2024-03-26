<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventory_id',
        'nombre',
        'cantidad_disponible',
        'cantidad_utilizada',
        'estado',
        'descripcion',
        'imagen',
    ];
}
