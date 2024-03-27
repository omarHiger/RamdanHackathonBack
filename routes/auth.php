<?php

use Illuminate\Support\Facades\Route;



Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::get('/signUp', [\App\Http\Controllers\Auth\AuthController::class, 'signUp'])->name('auth.signUp');
Route::get('/onBoarding', [\App\Http\Controllers\Auth\AuthController::class, 'onBoarding'])->name('auth.onBoarding');
Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'store'])->name('auth.store');
Route::post('/register', [\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('auth.register');
