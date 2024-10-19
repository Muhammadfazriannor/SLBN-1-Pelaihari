@extends('layouts.app')

@section('title', 'Halaman PPDB')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Penerimaan Peserta Didik Baru (PPDB)</h1>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Pendaftaran</h5>
                        <p>Silakan isi formulir berikut untuk mendaftar:</p>
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">No. Telepon</label>
                                <input type="text" class="form-control" id="telepon" placeholder="Masukkan no. telepon">
                            </div>
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kontak Informasi</h5>
                        <p>Hubungi kami untuk informasi lebih lanjut:</p>
                        <p><strong>Email:</strong> info@sekolah.com</p>
                        <p><strong>Telepon:</strong> 021-1234567</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
