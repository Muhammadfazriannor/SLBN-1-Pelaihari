<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ENjdO4Dr2bkBIFxQ7F1t5H6NfJFr1F2x5iP/5bMa1upPcN9gCTcZRJx3D5UWJ8y" crossorigin="anonymous">

    <!-- Optional: Tambahkan CSS custom Anda -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

    <!-- Konten halaman -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQ7F1t5H6NfJFr1F2x5iP/5bMa1upPcN9gCTcZRJx3D5UWJ8y" crossorigin="anonymous"></script>

    <!-- Optional: Tambahkan JS custom Anda -->
    <script src="{{ asset('js/custom.js') }}"></script>
    
    <li class="nav-item">
    <a class="nav-link" href="{{ route('ppdb.index') }}">PPDB</a>
    <!-- Tampilkan link ke Beranda jika sedang di halaman PPDB -->
    
        <li class="nav-item">
            <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
        </li>
  
</li>

</body>
</html>
