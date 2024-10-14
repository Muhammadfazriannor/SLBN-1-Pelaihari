<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BeritaController extends Controller
{
    public function index(): View
    {
        $beritas = Berita::latest()->paginate(10);
        return view('beritas.index', compact('beritas'));
    }

    public function create(): View
    {
        return view('beritas.create'); // Render view untuk tambah berita
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|url',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'published_at' => 'required|date',
        ]);

        // Simpan berita baru
        Berita::create($request->all());

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }
}
