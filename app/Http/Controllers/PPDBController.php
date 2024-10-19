<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index()
    {
        // Menampilkan view PPDB
        return view('ppdb');
    }
}

