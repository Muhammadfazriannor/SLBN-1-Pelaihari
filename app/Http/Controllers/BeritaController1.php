<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

class BeritaController extends Controller


{
        /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $beritas = Berita::latest()->paginate(10);

        //render view with products
        return view('beritas.index', compact('beritas'));
    }
     /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('beritas.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi form
        $request->validate([
            'foto'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judul'        => 'required|min:5',
            'isi'          => 'required|min:10',
            'tanggal'      => 'required|date',
        ]);
    
        // Unggah gambar
        $foto = $request->file('foto');
        $foto->storeAs('public/beritas', $foto->hashName());
    
        // Buat berita dengan menghapus tag HTML dari isi
        Berita::create([
            'foto'         => $foto->hashName(),
            'judul'        => $request->judul,
            'isi'          => strip_tags($request->isi), // Menghapus tag HTML
            'tanggal'      => $request->tanggal,
        ]);
    
        // Alihkan ke index
        return redirect()->route('beritas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
     /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get product by ID
        $berita = Berita::findOrFail($id);

        //render view with product
        return view('beritas.show', compact('berita'));
    }
}

