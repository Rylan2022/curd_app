<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/student', [RegisterController::class, 'show']);
Route::get('/edit/{empId}',[RegisterController::class, 'edit']);