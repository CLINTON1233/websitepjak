<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiKalkulatorController;
use App\Http\Controllers\layananPajakController;
use App\Http\Controllers\perhitunganPajakController;
use App\Http\Controllers\PenghasilanController;
use App\Http\Controllers\QuizPajakController;

Route::get('/informasi', [InformasiKalkulatorController::class, 'tampilkan']);
Route::get('/home', [HomeController::class, 'tampilkan']);


Route::get('/layanan', [layananPajakController::class, 'tampilkan']);
Route::get('/perhitungan', [perhitunganPajakController::class, 'tampilkan']);


Route::get('/quiz', [QuizPajakController::class, 'tampilkan']);
Route::get('/penghasilan', [PenghasilanController::class, 'tampilkan']);

Route::get('/welcome', function () {
    return view('welcome');
});
