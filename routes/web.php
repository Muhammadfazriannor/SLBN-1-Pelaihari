<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BeritaController;

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index'); // Rute untuk daftar berita
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create'); // Rute untuk tambah berita
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store'); // Rute untuk menyimpan berita
