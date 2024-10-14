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
        //validate form
        $request->validate([
            'foto'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judul'        => 'required|min:5',
            'isi'          => 'required|min:10',
            'tanggal'      => 'required|date',
        ]);

        //upload image
        $image = $request->file('foto');
        $image->storeAs('public/beritas', $foto->hashName());

        //create product
        Product::create([
            'foto'         => $foto->hashName(),
            'judul'        => $request->judul,
            'isi'          => $request->isi,
            'tanggal'      => $request->tanggal,
        ]);

        //redirect to index
        return redirect()->route('beritas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}

