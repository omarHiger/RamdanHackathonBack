<?php

use App\Http\Controllers\Auth\DonorAuthController;
use App\Http\Controllers\Auth\MentorAuthController;
use App\Http\Controllers\Auth\YouthAuthController;
use Illuminate\Support\Facades\Route;


// Mentor Auth
Route::controller(MentorAuthController::class)->prefix('auth/mentors')->group(function ($router) {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout')->middleware('auth:sanctum');
});


// Youth Auth
Route::controller(YouthAuthController::class)->prefix('auth/youths')->group(function ($router) {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout')->middleware('auth:sanctum');
});


// Donor Auth
Route::controller(DonorAuthController::class)->prefix('auth/donors')->group(function ($router) {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout')->middleware('auth:sanctum');
});
