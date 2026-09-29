<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserSeeder extends Seeder
{
    public function run(): void
    {
               User::updateOrCreate([
            'id' => '1'
        ], [
            'name' => 'Rizki S.Tr.Kom.',
            'email' => 'rizki@kampus.ac.id',
            'password' => '123',

        ]);

        \App\Models\User::factory(20)->create();
    }
}
