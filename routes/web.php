<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiKalkulatorController;
use App\Http\Controllers\QuizPajakController;
use App\Http\Controllers\PenghasilanController;
use App\Http\Controllers\layananPajakController;
use App\Http\Controllers\perhitunganPajakController;

// Route::get('/informasi', [InformasiKalkulatorController::class, 'index'])->name('informasiWajibPajak'); // Perbarui rute di sini
// Route::post('/save-informasi', [InformasiKalkulatorController::class, 'saveInformasiWajibPajak'])->name('saveInformasiWajibPajak');


Route::get('/informasi', [InformasiKalkulatorController::class, 'tampilkan']);
Route::get('/home', [HomeController::class, 'tampilkan']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/quiz', [QuizPajakController::class, 'tampilkan']); // Mengubah nama rute menjadi /quiz

Route::get('/penghasilan', [PenghasilanController::class, 'tampilkan']);

//Layanan
Route::get('/layanan', [layananPajakController::class, 'tampilkan']);

//Pehitungan
Route::get('/perhitungan_pajak', [perhitunganPajakController::class, 'tampilkan']);
