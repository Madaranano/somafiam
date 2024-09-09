<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicalController;

Route::get('/', function () {
    return view('index');
});
Route::get('/m', [MedicalController::class, 'm'])->name('m');
Route::get('/agroalimentaire', [MedicalController::class, 'agroalimentaire'])->name('agroalimentaire');
Route::get('/automobile', [MedicalController::class, 'automobile'])->name('automobile');
Route::get('/electronique-electromecanique-electromenager', [MedicalController::class, 'electronique'])->name('electronique-electromecanique-electromenager');
Route::get('/mecanique-energie-plasturgie-biens-de-consommation', [MedicalController::class, 'energie'])->name('mecanique-energie-plasturgie-biens-de-consommation');
