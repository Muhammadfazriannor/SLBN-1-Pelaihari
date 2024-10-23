<?php
use App\Http\Controllers\PPDBController;
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

Route::resource('/beritas', \App\Http\Controllers\BeritaController::class);
Route::resource('/ppdb', \App\Http\Controllers\PPDBController::class);

Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb.index');  // Menampilkan form PPDB
Route::post('/ppdb', [PPDBController::class, 'store'])->name('ppdb.store'); // Menyimpan data PPDB
