<?php
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/PPDB', function () {
    return view('ppdb.index');
});

Route::get('/', function () {
    return view('beranda');
});

// Perbaikan Route Registrasi
Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');

Route::resource('/beritas', \App\Http\Controllers\BeritaController::class);
Route::resource('/ppdb', \App\Http\Controllers\PPDBController::class);
Route::resource('/pendaftars', \App\Http\Controllers\PendaftarController::class);

Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb.index');  // Menampilkan form PPDB
Route::post('/ppdb', [PPDBController::class, 'store'])->name('ppdb.store'); // Menyimpan data PPDB
Route::get('/', [berandaController::class, 'index'])->name('beranda');
