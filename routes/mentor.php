<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\YouthController;
use Illuminate\Support\Facades\Route;

//Route::get('/youth-home', [CourseController::class, 'youthHome'])->name('youth-home');
//Route::get('/courses', [CourseController::class, 'index'])->name('youth.courses');
//Route::get('/course/{id}', [CourseController::class, 'show'])->name('youth.courses.show');


Route::controller(MentorController::class)->prefix('mentors')->group(function () {
    Route::get('/','viewCourses')->name('mentor.home');
    Route::get('/course/{id}','showCourse')->name('mentor.course.show');
    Route::get('/course/','createCourse')->name('mentor.course.create');
    Route::post('/course/','addCourse')->name('mentor.course.store');
    Route::get('/{id}', 'show')->name('mentor.show');
    Route::post('/', 'register')->name('mentor.register');
});
