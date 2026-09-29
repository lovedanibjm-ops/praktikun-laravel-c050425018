<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::updateOrCreate([
            'nim' => '2024010001'
        ], [
            'nama' => 'Ahmad Fauzi',
            'email' => 'ahmad@kampus.ac.id',
            'prodi' => 'Teknik Informatika',
            'semester' => '3',
        ]);

        Mahasiswa::updateOrCreate([
            'nim' => '2024010002'
        ], [

            'nama' => 'Siti Aminah',
            'email' => 'siti@kampus.ac.id',
            'prodi' => 'Sistem Informasi',
            'semester' => '1',
        ]);

        \App\Models\Mahasiswa::factory(50)->create();
    }
}
