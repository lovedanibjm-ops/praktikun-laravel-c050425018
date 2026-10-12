<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiMatakuliah extends Model
{
    protected $guarded = [];

    // Relasi balik ke Mahasiswa
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    // Relasi balik ke Matakuliah
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }

    
}