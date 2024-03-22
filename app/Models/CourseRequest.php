<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'rating',
        'is_accepted',
        'youth_id',
        'course_id',
        'goal',
    ];
}
