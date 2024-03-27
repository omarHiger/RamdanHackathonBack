<?php

use App\Http\Controllers\DonorController;
use App\Http\Controllers\FundingRequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/funding-request', [FundingRequestController::class, 'index']);



Route::controller(DonorController::class)->prefix('donors')->group(function () {
    Route::get('/', 'index')->name('donor.home');
    Route::get('/funding_request', 'displayFundingRequest')->name('donor.fundingRequest');
    Route::get('/funding_details/{id}', 'funding_details')->name('donor.funding_details');
    Route::post('/', 'register')->name('donor.register');
});
