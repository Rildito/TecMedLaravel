<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ci',
        'nombres',
        'apellidoPaterno',
        'apellidoMaterno',
        'tipo',
        'estado',
        'imagen',
        'fechaNacimiento',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function student() {
        return $this->hasOne(Student::class, 'id', 'id');
    }

    public function responses() {
        return $this->hasMany(Response::class,'user_id','id'); //al reves de belongs to
    }

    public function correspondences(){
        return $this->belongsToMany(Correspondence::class, 'collaborations', 'secondary_user_id', 'correspondence_id');
    }
}
