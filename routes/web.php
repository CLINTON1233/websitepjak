<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiKalkulatorController;
use App\Http\Controllers\layananPajakController;
use App\Http\Controllers\perhitunganPajakController;
use App\Http\Controllers\PenghasilanController;
use App\Http\Controllers\QuizPajakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\AdminAuthController;

Route::get('/informasi', [InformasiKalkulatorController::class, 'tampilkan']);
Route::get('/home', [HomeController::class, 'tampilkan']);


Route::get('/layanan', [layananPajakController::class, 'tampilkan']);
Route::get('/perhitungan', [perhitunganPajakController::class, 'tampilkan']);


Route::get('/quiz', [QuizPajakController::class, 'tampilkan']);
Route::get('/penghasilan', [PenghasilanController::class, 'tampilkan']);

Route::get('/loginuser', function () {
    return view('login_user');
});

Route::get('/registeruser', function () {
    return view('register_user');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::get('/kuis', [AdminAuthController::class, 'showkuisForm'])->name('admin.kuis');
    Route::post('/kuis', [AdminAuthController::class, 'kuis']);
});
