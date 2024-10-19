<!-- resources/views/beranda.blade.php -->
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Selamat Datang di PPDB SLBN 1 Pelaihari</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h5 class="card-title">Informasi PPDB</h5>
                    <p class="card-text">Dapatkan informasi lengkap tentang penerimaan peserta didik baru (PPDB) di SLBN 1 Pelaihari.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Image 2">
                <div class="card-body">
                    <h5 class="card-title">Berita Terbaru</h5>
                    <p class="card-text">Baca berita dan pengumuman terbaru seputar kegiatan dan acara sekolah.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">Fasilitas Sekolah</h5>
                    <p class="card-text">Lihat berbagai fasilitas pendidikan yang tersedia di SLBN 1 Pelaihari.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2>Testimoni Siswa</h2>
        <p class="text-muted">Apa kata siswa kami tentang SLBN 1 Pelaihari?</p>
        <div class="row">
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">"SLBN 1 Pelaihari adalah tempat terbaik untuk belajar dengan dukungan penuh dari para guru."</p>
                    <footer class="blockquote-footer">Siswa A, <cite title="Source Title">Kelas 12</cite></footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">"Fasilitasnya lengkap dan sangat membantu dalam proses pembelajaran."</p>
                    <footer class="blockquote-footer">Siswa B, <cite title="Source Title">Kelas 11</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>
@endsection
