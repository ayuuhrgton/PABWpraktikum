<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/form', [App\Http\Controllers\mahasiswaController::class, 'form']);
Route::post('/simpan', [App\Http\Controllers\mahasiswaController::class, 'simpan']);
Route::get('/mahasiswa', [App\Http\Controllers\mahasiswaController::class, 'daftar']);

//praktikum 4
Route::get('/laporan', [DataController::class, 'index'])->name('laporan.index');
Route::get('/lapor', [DataController::class, 'form'])->name('laporan.form');
Route::post('/lapor', [DataController::class, 'store'])->name('laporan.store');