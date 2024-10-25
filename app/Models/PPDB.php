<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'ppdb'; // Hanya perlu jika nama tabel bukan bentuk jamak dari nama model

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'nama_lengkap',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'email',
        'no_hp',
        'foto',
    ];
}

