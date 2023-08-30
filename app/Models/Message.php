<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable=[
        'sender_id',
        'receiver_id',
        'conversation_id',
        'read',
        'type',
        'body',
    ];

    public function conversations(){
        return $this->belongsTo(Conversation::class);
    }
    public function user(){
        return $this->hasMany(User::class, 'sender_id');
    }
}
