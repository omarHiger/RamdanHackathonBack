<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/youth-home', [CourseController::class, 'youthHome'])->name('youth-home');
Route::get('/courses', [CourseController::class, 'index'])->name('youth.courses');
Route::post('/courses', [CourseController::class, 'index'])->name('youth.courses');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('youth.courses.show');
