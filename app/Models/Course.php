<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'location',
        'title',
        'description',
        'image',
        'level',
        'start_date',
        'should_request',
    ];

    public function youths()
    {
        return $this->belongsToMany(Youth::class, 'course_requests', 'course_id', 'youth_id')
            ->withPivot('rating', 'is_accepted', 'goal');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function mentors()
    {
        return $this->belongsToMany(Mentor::class, 'mentor_course');
    }
}
