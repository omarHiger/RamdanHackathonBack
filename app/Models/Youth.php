<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Youth extends Authenticatable implements MustVerifyEmail
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

    public function sent_messages()
    {
        return $this->morphMany(ChMessage::class, 'from');
    }

    public function received_messages()
    {
        return $this->morphMany(ChMessage::class, 'to');
    }


    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_requests', 'youth_id', 'course_id')
            ->withPivot('rating', 'is_accepted', 'goal');
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'user', 'user_category')
            ->withPivot('level');
    }
}
