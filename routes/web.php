<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel',[ArtikelController::class, 'index']);

Route::get('/profil', function(){
    return 'Halo, Selamat datang';
});

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

Route::get('/profil', function (){
    return view('profil')->with('nama','Ahmad Fauzi')->with('nim','2024010001')->with('prodi','Teknik Informatika');
});

Route::get('/akademik/statistik', function () {
    return view('akademik.statistik');
});

Route::resource('matakuliah', MatakuliahController::class)->only(['index','show']);