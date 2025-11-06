<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// Home route
Route::get('/', [FrontendController::class, 'index']);
Route::get('/service', [FrontendController::class, 'service']);
