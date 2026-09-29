<h1>Daftar Matakuliah</h1>
<table border="1" cellpadding="8">
    <tr><th>Kode Matakuliah</th><th>Nama Matakuliah</th><th>SKS</th><th>Semester</th><th>Dosen</th></tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->kode_mk }}</td>
            <td>{{ $item->nama_mk }}</td>
            <td>{{ $item->sks }}</td>
            <td>{{ $item->semester }}</td>
            <td>{{ $item->dosen->name}}</td>
        </tr>
    @endforeach
</table>