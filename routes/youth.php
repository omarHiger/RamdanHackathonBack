<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/youth-home', [CourseController::class, 'youthHome']);
