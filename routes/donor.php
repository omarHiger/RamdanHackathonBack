<?php

use App\Http\Controllers\FundingRequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/funding-request', [FundingRequestController::class, 'index']);
