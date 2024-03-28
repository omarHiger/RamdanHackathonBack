<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mentor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'position',
        'location',
        'about',
        'phone_number',
        'verification_code',
        'is_verified'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];



    public function courses()
    {
        return $this->belongsToMany(Course::class, 'mentor_course');
    }


    public function sent_messages()
    {
        return $this->morphMany(ChMessage::class, 'from');
    }

    public function received_messages()
    {
        return $this->morphMany(ChMessage::class, 'to');
    }

}
