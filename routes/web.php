<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\SapaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel',[ArtikelController::class, 'index']);

Route::get('/kontak', function(){
    return 'daftar kontak yang tersedia: ';
});

Route::get('/tentang', function(){
    return 'kami adalah organisasi yang bergerak dalam bidang riset dan teknologi yang beralamat di-';
});

Route::prefix('admin') -> name('admin.')->group(function(){
    Route::get('/dashboard', function(){
        return'Dashboard Admin';
    })->name('dashboard');
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/profil', [LatihanController::class, 'index']);

Route::get('/akademik/statistik', function () {
    return view('akademik.statistik');
});

Route::resource('matakuliah', MatakuliahController::class)->only(['index','show']);

// Praktikum 1 Controller -----------------------------------
Route::get('/sapa-closure',function(){
    $nama = 'Ahmad Fauzi';
    $pesan = "Halo, {$nama}! Ini ditulis langsung di route.";
    return $pesan;
});

Route::get('/sapa-controller', [SapaController::class, 'index']);

Route::get('/profil', [LatihanController::class, 'index']);

// Praktikum 2 Controller
Route::get('/mahasiswa-uji', function () {
    return view('mahasiswa.form-uji');
});

Route::post('/mahasiswa-uji',[MahasiswaController::class, 'store']);
Route::get('/api-latihan', [LatihanController::class, 'ApiIndex']);

//Tugas mandiri 2
Route::get('/cari-mahasiswa', function(){
    return view('mahasiswa.cari');
});

Route::get('/hasil-cari', [MahasiswaController::class, 'cariMahasiswa']);

// Praktikum 3 Controller --- tugas mandiri ------
use App\Http\Controllers\HitungTotalSksController;
Route::get('/total-sks', HitungTotalSksController::class);

//Praktikum 4 Controller ---- tugas mandiri ------
use Illuminate\Support\Facades\DB;

Route::get('/cek-query-log', function () {
    DB::enableQueryLog();
    \App\Models\Mahasiswa::where('semester', 3)->orderBy('nama', 'asc')->get();
    dd(DB::getQueryLog());
});

// Tugas Mandiri 5 - Nomor 1 (Filter & Sort)
Route::get('/tugas5-1', function () {
    $data = DB::table('mahasiswas')
        ->where('prodi', 'Teknik Informatika')
        ->whereBetween('semester', [3, 6])
        ->orderBy('nama', 'asc')
        ->get();
    
    dd($data); 
});

// Tugas Mandiri 5 - Nomor 2 (Group By & Count)
Route::get('/tugas5-2', function () {
    $rekap = DB::table('mahasiswas')
        ->select('prodi', DB::raw('count(*) as jumlah'))
        ->groupBy('prodi')
        ->get();
        
    return view('tugas5-2', compact('rekap'));
});

// Tugas Mandiri 5 - Nomor 3 (Pagination)
Route::get('/tugas5-3', function () {
    $mahasiswa = DB::table('mahasiswas')->paginate(10); 
    return view('tugas5-3', compact('mahasiswa'));
});

//Tugas Mandiri 7 - nomor 3 

// Route 1: TANPA Eager Loading
Route::get('/tugas7-tanpa-eager', function () {
    DB::enableQueryLog();
    $mahasiswa = Mahasiswa::limit(10)->get();
    foreach ($mahasiswa as $mhs) {
        $mhs->nilai->count(); // Memicu query di dalam looping
    }
    dd(DB::getQueryLog());
});

// Route 2: DENGAN Eager Loading
Route::get('/tugas7-dengan-eager', function () {
    DB::enableQueryLog();
    $mahasiswa = Mahasiswa::with('nilai')->limit(10)->get();
    foreach ($mahasiswa as $mhs) {
        $mhs->nilai->count(); // Relasi sudah ditarik di awal
    }
    dd(DB::getQueryLog());
});