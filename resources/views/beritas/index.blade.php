<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Berita</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-img-top {
            max-height: 300px; /* Atur tinggi maksimum gambar */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
        }
    </style>
</head>
<body>

<header class="bg-primary text-white text-center py-3">
    <h1>Berita Terbaru</h1>
</header>

<div class="container mt-4">
    <!-- Tombol untuk menambah berita -->
    <a href="{{ route('berita.create') }}" class="btn btn-success mb-3">Tambah Berita</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach ($beritas as $berita)
        <article class="card mb-4">
            <img src="{{ $berita->image }}" class="card-img-top img-fluid" alt="Gambar {{ $berita->title }}">
            <div class="card-body">
                <h2 class="card-title">{{ $berita->title }}</h2>
                <p class="card-text date text-muted">
                    Tanggal: {{ $berita->published_at ? $berita->published_at->format('d F Y') : 'Tanggal tidak tersedia' }}
                </p>
                <p>{{ $berita->description }}</p>
            </div>
        </article>
    @endforeach

    {{ $beritas->links() }} <!-- Pagination -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
