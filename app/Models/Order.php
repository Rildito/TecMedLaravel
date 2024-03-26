<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable  = [
        'user_id',
        'teacher_id',
        'subject_id',
        'descripcion',
        'estado'
    ];

    public function user() {
        return $this->hasOne(User::class,'id','user_id');
    }
    
    public function student() {
        return $this->hasOne(Student::class, 'id', 'user_id');
    }

    public function subject() {
        return $this->hasOne(Subject::class,'id','subject_id');
    }

    public function teacher() {
        return $this->hasOne(Teacher::class,'id','teacher_id');
    }

    public function materials () {
        return $this->belongsToMany(Material::class, 'order_materials')->withPivot('cantidad');
    }

    
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
    
    // public function student() {
    //     return $this->belongsTo(Student::class, 'user_id');
    // }

    // public function subject() {
    //     return $this->belongsTo(Subject::class);
    // }

    // public function teacher() {
    //     return $this->belongsTo(Teacher::class);
    // }

    // public function materials () {
    //     return $this->belongsToMany(Material::class, 'order_materials')->withPivot('cantidad');
    // }
    use HasFactory;
}
