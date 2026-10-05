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

Route::prefix('akademik')->name('akademik.')->group(function () {
    Route::resource('matakuliah', MatakuliahController::class)->only (['index','show','create','store']);
});

Route::resource('mahasiswa', MahasiswaController::class);