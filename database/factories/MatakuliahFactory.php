<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Matakuliah>
 */
class MatakuliahFactory extends Factory
{

    public function definition(): array
    {
        return [
           'kode_mk' => fake()->unique()->numerify('MK###'),
            'nama_mk' => fake()->randomElement([
            'Pemrograman Web', 'Sistem Informasi Kota Cerdas', 'Internet of Things', 
            'Basis Data Relasional', 'Algoritma dan Pemrograman', 'Jaringan Komputer', 
            'Matematika Diskrit', 'Rekayasa Perangkat Lunak', 'Sistem Operasi',
            'Kecerdasan Buatan', 'Keamanan Siber', 'Struktur Data',
            'Pengembangan Aplikasi Mobile', 'Desain Antarmuka (UI/UX)', 'Cloud Computing',
            'Pemrograman Berorientasi Objek', 'Analisis Proses Bisnis', 'Tata Kelola TI',
            'Etika Profesi', 'Metodologi Penelitian']),
            'sks' => fake()->numberBetween(1, 4),
            'semester' => fake()->numberBetween(1, 8),
            'dosen_id' => \App\Models\User::inRandomOrder()->first()->id ?? App\Models\User::factory()->create(),
        ];
    }
}
