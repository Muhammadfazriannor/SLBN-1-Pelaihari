<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\View\View;

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
}
