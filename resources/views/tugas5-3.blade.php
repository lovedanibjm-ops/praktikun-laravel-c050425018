<!DOCTYPE html>
<html>
<body>
    <h3>Daftar Mahasiswa (Pagination)</h3>
    <table border="1" cellpadding="8">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->prodi }}</td>
        </tr>
        @endforeach
    </table>

    <br>
    <!-- Menampilkan tombol navigasi halaman -->
    {{ $mahasiswa->links() }} 
</body>
</html>