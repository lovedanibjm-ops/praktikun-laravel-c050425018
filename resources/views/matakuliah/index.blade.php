@extends('layouts.app')

<!-- Mengubah judul tab browser khusus untuk halaman ini -->
@section('judul', 'Daftar Mata Kuliah')

@section('konten')
    <h1>Daftar Mata Kuliah</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        @forelse ($matakuliah as $mk)
            <tr style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>
                    @if ($mk->sks > 3)
                        <strong>SKS Besar</strong>
                    @else
                        Normal
                    @endif
                </td>
                <td>
                    <a href="{{ route('matakuliah.show', $mk->id) }}">Lihat Detail</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data mata kuliah.</td>
            </tr>
        @endforelse
    </table>
@endsection