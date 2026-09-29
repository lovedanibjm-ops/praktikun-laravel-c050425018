<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\ArtikelController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel',[ArtikelController::class, 'index']);

Route::get('/mahasiswa', function () {
    $data= Mahasiswa::all();
    return view('mahasiswa.index', compact('data'));
});  

Route::get('/matakuliah', function () {
    $data = Matakuliah::all();
    return view('matakuliah.index', compact('data'));
});

use App\Http\Controllers\MahasiswaController;
Route::resource('mahasiswa', MahasiswaController::class);

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