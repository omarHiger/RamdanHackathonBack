<?php

use App\Http\Controllers\DonorController;
use App\Http\Controllers\FundingRequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/funding-request', [FundingRequestController::class, 'index'])->middleware('auth:donor');



Route::controller(DonorController::class)->prefix('donors')->group(function () {
    Route::get('/', 'index')->name('donor.home')->middleware('auth:donor');
    Route::get('/funding_request', 'displayFundingRequest')->name('donor.fundingRequest')->middleware('auth:donor');
    Route::get('/funding_details/{id}', 'funding_details')->name('donor.funding_details')->middleware('auth:donor');
    Route::post('/', 'register')->name('donor.register');
    Route::post('/donate/{id}', 'donate')->name('donor.donate');
});
