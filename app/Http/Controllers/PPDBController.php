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
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
        ]);

        // Simpan data ke dalam tabel ppdb
        PPDB::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
        ]);

        return redirect()->route('ppdb.index')->with('success', 'Pendaftaran berhasil disimpan.');
    }
}


