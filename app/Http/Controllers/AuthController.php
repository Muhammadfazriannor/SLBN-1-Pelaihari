<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan ini ditambahkan
use Illuminate\Support\Facades\Hash; // Pastikan ini ditambahkan

class AuthController extends Controller
{
    public function tampilRegistrasi(Request $request) {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255', // Ganti 'username' menjadi 'name'
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Simpan data ke database
        User::create([
            'name' => $request->name, // Ganti 'username' menjadi 'name'
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('beranda')->with('success', 'Registrasi berhasil!');
    }
}