<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <!-- Judul dinamis, default-nya 'Aplikasi Akademik' -->
    <title>@yield('judul', 'Aplikasi Akademik')</title>
</head>
<body>
    <header>
        <h2>Sistem Informasi Akademik</h2>
        
        <!-- Memanggil file partial navigasi -->
        @include('partials.navbar')
        
        <hr>
    </header>

    <main>
        <!-- Area tempat konten spesifik halaman akan disisipkan -->
        @yield('konten')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Praktikum Pemrograman Web</p>
    </footer>
</body>
</html>