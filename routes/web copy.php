<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurdController;

Route::get('/', function () {
    return redirect('/form');
});

Route::get('/register', [CurdController::class, 'index'])->name('form');
Route::post('/register', [CurdController::class, 'register']);
Route::get('/view', [CurdController::class, 'view']);
Route::get('/edit/{empID}', [CurdController::class, 'edit_employee']);
Route::post('/update/{empID}', [CurdController::class, 'update_employee']);
Route::get('/delete/{empId}', [CurdController::class, 'delete_employee']);
