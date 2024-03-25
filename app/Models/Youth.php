<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Youth extends Authenticatable
{
    use HasFactory;

    protected  $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'education_level',
        'location',
        'phone_number',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts()
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
