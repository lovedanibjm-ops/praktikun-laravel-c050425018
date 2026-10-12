<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function nilai()
{
    return $this->hasMany(NilaiMatakuliah::class);
}
    use HasFactory;
    protected $fillable = [
        'nim',
        'nama',
        'email',
        'prodi',
        'semester',
    ];
}
