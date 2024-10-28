<!-- resources/views/beranda.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERANDA SLBN 1 PELAIHARI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- resources/views/beranda.blade.php -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="{{ route('beranda') }}">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="height: 40px;">
        </a>
            <a class="navbar-brand" href="#">SLBN 1 Pelaihari</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ppdb">PPDB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="beritas">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman Beranda -->
    <div class="container mt-4">
        <h1 class="text-center my-5">Selamat Datang di SLBN 1 Pelaihari</h1>

        <!-- Bagian Kartu Informasi -->
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
        <div class="mt-5" id="ppdb">
            <h2>Tentang PPDB</h2>
            <p>PPDB di SLBN 1 Pelaihari bertujuan untuk memberikan kesempatan kepada semua anak untuk mendapatkan pendidikan yang layak. Kami berkomitmen untuk menyelenggarakan proses penerimaan yang transparan dan adil.</p>
            <p>Untuk informasi lebih lanjut tentang pendaftaran, syarat, dan jadwal, silakan kunjungi halaman informasi PPDB kami.</p>
        </div>
        
    </div>

        