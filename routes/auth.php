<?php


use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::get('/signUp', [\App\Http\Controllers\Auth\AuthController::class, 'signUp'])->name('auth.signUp');
Route::get('/onBoarding', [\App\Http\Controllers\Auth\AuthController::class, 'onBoarding'])->name('auth.onBoarding');
Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'store'])->name('auth.store');



Route::get('verify/{email}/{secret}/{user_type}',[VerificationController::class,'verifyEmail']);
//
//Route::get('/donor/email/verify/{id}/{hash}', function (EmailVerificationRequest  $request) {
//    $request->fulfill();
//
//    return redirect('/home');
//})->middleware(['signed'])->name('verification.verify.donor');
//
//
//Route::post('/email/verification-notification', function (Request $request) {
//    $request->user()->sendEmailVerificationNotification();
//
//    return back()->with('message', 'Verification link sent!');
//})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
