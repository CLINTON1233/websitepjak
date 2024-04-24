<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiKalkulatorController;

// Route::get('/informasi', [InformasiKalkulatorController::class, 'index'])->name('informasiWajibPajak'); // Perbarui rute di sini
// Route::post('/save-informasi', [InformasiKalkulatorController::class, 'saveInformasiWajibPajak'])->name('saveInformasiWajibPajak');


Route::get('/informasi', [InformasiKalkulatorController::class, 'tampilkan']);
Route::get('/home', [HomeController::class, 'tampilkan']);

Route::get('/welcome', function () {
    return view('welcome');
});
