<h1>Daftar Mahasiswa</h1>

<a href="{{ route('matakuliah.index') }}">Ke Daftar Mata Kuliah</a>
<hr>

<table border="1" cellpadding="8">
    <tr><th>NIM</th><th>Nama</th><th>Program Studi</th><th>Semester</th></tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->prodi ?? 'Belum Diatur'}}</td>
            <td>{{ $item->semester ?? '-' }}</td>
        </tr>
    @endforeach
</table>

<hr>
<h3>Uji Keamanan XSS:</h3>
@php
    $serangan = "<script>alert('XSS Attack')</script>";
@endphp

<p>Menggunakan {{ $serangan }}</p>
<p>Menggunakan {!! $serangan !!}</p>