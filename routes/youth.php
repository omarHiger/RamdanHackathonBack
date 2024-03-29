<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\YouthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:youth')->group(function (){

Route::get('/youth-home', [CourseController::class, 'youthHome'])->name('youth.home');
Route::get('/courses', [CourseController::class, 'index'])->name('youth.courses');
Route::post('/courses', [CourseController::class, 'index'])->name('youth.courses');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('youth.courses.show');
Route::get('/add-request/', [\App\Http\Controllers\FundingRequestController::class, 'create'])->name('youth.funding.create');
Route::get('/my-fundings/', [\App\Http\Controllers\FundingRequestController::class, 'fundingForYouth'])->name('youth.funding.index');
Route::get('/my-fundings/{id}', [\App\Http\Controllers\FundingRequestController::class, 'show'])->name('youth.funding.show');
Route::post('/add-request/', [\App\Http\Controllers\FundingRequestController::class, 'store'])->name('youth.funding.store');
Route::post('/enroll/{id}', [\App\Http\Controllers\YouthController::class, 'enroll'])->name('youth.course.enroll');
});


Route::controller(YouthController::class)->prefix('youths')->group(function () {
    Route::post('/', 'register')->name('youth.register');
});
