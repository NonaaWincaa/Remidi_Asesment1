<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrediksiController;

Route::get('/', [PrediksiController::class, 'index'])->name('home');
Route::get('/prediksi', [PrediksiController::class, 'formPrediksi'])->name('prediksi.form');
Route::post('/prediksi/proses', [PrediksiController::class, 'prosesData'])->name('prediksi.proses');
Route::get('/riwayat', [PrediksiController::class, 'riwayat'])->name('prediksi.riwayat');

// Route Halaman Tentang
Route::get('/tentang', [PrediksiController::class, 'tentang'])->name('prediksi.tentang');