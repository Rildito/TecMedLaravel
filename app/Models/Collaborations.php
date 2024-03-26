<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborations extends Model
{
    use HasFactory;

    protected $fillable = [
        'primary_user_id',
        'secondary_user_id',
        'correspondence_id',
        'user_id'
    ];

    public function usuarioColaborador() {
        return $this->belongsTo(User::class,'secondary_user_id');
    }

    public function usuarioCreador() {
        return $this->belongsTo(User::class,'primary_user_id');
    }


    public function correspondence(){
        return $this->belongsTo(Correspondence::class,'correspondence_id');
    }

    public function responses() {
        return $this->hasMany(Response::class,'correspondence_id','correspondence_id');
    }

}
