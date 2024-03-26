<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'response',
        'document_id',
        'correspondence_id',
        'user_id',
        'user_secondary_id',
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function document() {
        return $this->hasOne(Document::class,'id','document_id');
    }

}
