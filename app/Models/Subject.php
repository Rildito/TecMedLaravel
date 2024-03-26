<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'mention_id'
    ];

    public function mention() {
        return $this->hasOne(Mentions::class,'id','mention_id');
    }
}
