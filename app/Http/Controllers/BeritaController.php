<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Storage;
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
        //get all beritas
        $beritas = Berita::latest()->paginate(10);

        //render view with beritas
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
        //get berita by ID
        $berita = Berita::findOrFail($id);

        //render view with berita
        return view('beritas.show', compact('berita'));
    }
      /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get berita by ID
        $berita = Berita::findOrFail($id);

        //render view with berita
        return view('beritas.edit', compact('berita'));
    }
        /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Validate form
        $request->validate([
            'foto'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'judul'        => 'required|min:5',
            'isi'          => 'required|min:10',
            'tanggal'      => 'required|date',
        ]);

        // Get berita by ID
        $berita = Berita::findOrFail($id);

        // Check if image is uploaded
        if ($request->hasFile('foto')) {
            // Upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/beritas', $foto->hashName());

            // Delete old image
            Storage::delete('public/beritas/' . $berita->foto);

            // Update berita with new image
            $berita->update([
                'foto'         => $foto->hashName(),
                'judul'        => $request->judul,
                'isi'          => $request->isi,
                'tanggal'      => $request->tanggal,
            ]);
        } else {
            // Update berita without image
            $berita->update([
                'judul' => $request->judul,
                'isi' => strip_tags($request->isi), // Menghapus tag HTML
                'tanggal' => $request->tanggal,
            ]);
            
        }

        // Redirect to index
        return redirect()->route('beritas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

}

