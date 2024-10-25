<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PPDB;

class PPDBController extends Controller
{
    // Menampilkan form PPDB
    public function index()
    {
        return view('ppdb.index');  // Mengarahkan ke blade form ppdb
    }

    // Menyimpan data PPDB ke database
    public function store(Request $request) {
{
    $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'tanggal_lahir'=> 'required|date|max:20',
        'jenis_kelamin'=> 'required|string|max:10',
        'alamat'=> 'required|string|max:255',
        'email' => 'required|email|max:255',
        'no_hp' => 'required|string|max:15',
        'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
    ]);

    // Upload file foto jika ada
    $fotoPath = null;
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoPath = $foto->store('public'); // Simpan file ke storage
    }

    // Simpan data ke dalam tabel ppdb
    PPDB::create([
        'nama_lengkap' => $request->input('nama_lengkap'),
        'tanggal_lahir'=> $request->input('tanggal_lahir'),
        'jenis_kelamin'=> $request->input('jenis_kelamin'),
        'alamat'=> $request->input('alamat'),
        'email' => $request->input('email'),
        'no_hp' => $request->input('no_hp'),
        'foto'  => $fotoPath, // Simpan path file foto ke kolom foto
    ]);

    return redirect()->route('ppdb.index')->with('success', 'Pendaftaran berhasil disimpan.');
}
    }
}