<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SLBN 1 PELAIHARI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- resources/views/beranda.blade.php -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="{{ route('beranda') }}">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="height: 40px;">
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
    

<div class="container">
    <h1>Form Pendaftaran PPDB SLBN 1 Pelaihari</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="nama">Nama lengkap:</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>

        <div class="form-group">
            <label for="nama">Tanggal lahir:</label>
            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
            <label for="nama">Jenis kelamin:</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
        </div>

        <div class="form-group">
            <label for="nama">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="no_hp">Nomor HP:</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>

        <div class="form-group mb-3">
        <label class="font-weight-bold">Tambahkan foto berkas ABK</label>
        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">

        <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary">Daftar</button>
        <button type="reset" class="btn btn-md btn-warning">Reset</button>
    </form>
</div>
       
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </script>
    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 3000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 3000
            });
        @endif

    </script>
</body>
</html>