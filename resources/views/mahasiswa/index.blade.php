<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="8">
    <tr><th>NIM</th><th>Nama</th><th>Program Studi</th><th>Semester</th></tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->prodi }}</td>
            <td>{{ $item->semester }}</td>
        </tr>
    @endforeach
</table>