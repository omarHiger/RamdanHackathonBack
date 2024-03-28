<?php

use App\Http\Controllers\Auth\DonorAuthController;
use App\Http\Controllers\Auth\MentorAuthController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $news = \App\Models\Update::latest()->limit(4)->get();
    //return  $news;
    return view('welcome', compact('news'));
})->name('landing');

require "donor.php";
require "youth.php";
require "mentor.php";



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//verified

require __DIR__.'/auth.php';
require 'mentorChatify.php';
