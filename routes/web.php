<?php

use Illuminate\Support\Facades\Route;

Route::get('/form', [App\Http\Controllers\mahasiswaController::class, 'form']);
Route::post('/simpan', [App\Http\Controllers\mahasiswaController::class, 'simpan']);
Route::get('/mahasiswa', [App\Http\Controllers\mahasiswaController::class, 'daftar']);
