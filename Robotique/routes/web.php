<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicalController;

Route::get('/', function () {
    return view('index');
});
Route::get('/m', [MedicalController::class, 'index'])->name('m');
