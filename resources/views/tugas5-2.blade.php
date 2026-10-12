<!DOCTYPE html>
<html>
<body>
    <h3>Rekap Jumlah Mahasiswa per Prodi</h3>
    <table border="1" cellpadding="8">
        <tr>
            <th>Program Studi</th>
            <th>Jumlah Mahasiswa</th>
        </tr>
        @foreach($rekap as $r)
        <tr>
            <td>{{ $r->prodi }}</td>
            <td>{{ $r->jumlah }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>