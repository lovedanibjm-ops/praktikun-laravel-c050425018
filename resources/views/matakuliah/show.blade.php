<!DOCTYPE html>
<html>
<head>
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h2>Detail Mata Kuliah: {{ $matakuliah->nama_mk ?? 'Nama Matakuliah' }}</h2>

    <h3>Daftar Mahasiswa yang Mengambil Mata Kuliah Ini:</h3>
    <table border="1" cellpadding="8" style="border-collapse: collapse;">
        <tr>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Prodi</th>
            <th>Nilai</th>
        </tr>
        
        <!-- Melakukan perulangan dari data relasi -->
        @forelse($matakuliah->nilai as $n)
        <tr>
            <!-- Mengakses tabel mahasiswa melalui relasi -->
            <td>{{ $n->mahasiswa->nim ?? '-' }}</td>
            <td>{{ $n->mahasiswa->nama ?? '-' }}</td>
            <td>{{ $n->mahasiswa->prodi ?? '-' }}</td>
            <td>{{ $n->nilai }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align: center;">Belum ada mahasiswa yang mengambil mata kuliah ini.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>