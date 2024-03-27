<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    use HasFactory;

    protected $table = 'user_category';

    protected $fillable = [
        'user_id',
        'user_type',
        'category_id',
        'level',
    ];
}
