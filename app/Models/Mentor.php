<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Mentor extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    protected $fillable = [
       'first_name',
       'last_name',
       'email',
       'password',
       'position',
       'location',
       'about',
       'phone_number',
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
