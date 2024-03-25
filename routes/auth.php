<?php

use Illuminate\Support\Facades\Route;



Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'store'])->name('auth.store');
