<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use Carbon\Carbon; // Tambahkan Carbon untuk manipulasi tanggal

class PPDBController extends Controller
{
    // Menampilkan form PPDB
    public function index()
    {
        return view('ppdb.index');
    }

    // Menyimpan data PPDB ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date_format:d-m-Y', // Validasi format tanggal input
            'jenis_kelamin' => 'required|string|max:10',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Konversi tanggal ke format MySQL
        $tanggalLahir = Carbon::createFromFormat('d-m-Y', $request->input('tanggal_lahir'))->format('Y-m-d');

        // Upload file foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('public/pendaftars');
        }

        // Simpan data ke dalam tabel pendaftar
        Pendaftar::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'tanggal_lahir' => $tanggalLahir, // Gunakan tanggal yang sudah dikonversi
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'foto' => $fotoPath,
        ]);

        return redirect()->route('ppdb.index')->with('success', 'Pendaftaran berhasil disimpan.');
    }
}
