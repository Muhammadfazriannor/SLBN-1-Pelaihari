<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/PPDB', function () {
    return view('ppdb');
});

Route::get('/', function () {
    return view('beranda');
});

Route::resource('/beritas', \App\Http\Controllers\BeritaController::class);
Route::resource('/ppdb', \App\Http\Controllers\PPDBController::class);

