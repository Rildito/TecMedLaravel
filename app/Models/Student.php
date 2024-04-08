<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'ru',
        'mention_id',
        'user_id'
    ];

    public function mention() {
        return $this->hasOne(Mentions::class,'id','mention_id'); //tabla, id foranea , id de tabla padre
    }

    use HasFactory;
}
