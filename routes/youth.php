<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\YouthController;
use Illuminate\Support\Facades\Route;

Route::get('/youth-home', [CourseController::class, 'youthHome'])->name('youth-home');
Route::get('/courses', [CourseController::class, 'index'])->name('youth.courses');
Route::post('/courses', [CourseController::class, 'index'])->name('youth.courses');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('youth.courses.show');


Route::controller(YouthController::class)->prefix('youths')->group(function () {
    Route::post('/', 'register')->name('youth.register');
});
