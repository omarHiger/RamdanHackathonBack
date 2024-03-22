<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montor extends Model
{
    use HasFactory;
    protected $fillable = [
       'first_name',
       'last_name',
       'email',
       'password',
       'education_level',
       'about',
       'phone_number',
    ];
}
