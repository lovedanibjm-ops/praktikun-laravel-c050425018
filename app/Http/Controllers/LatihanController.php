<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index(){
        return view('profil', [
            'nama' => 'Ahmad Fauzi',
            'nim' => '2024010001',
            'prodi' => 'Teknik Informatika',
        ]);
    }

    public function ApiIndex(){
        return response()->json([
            'status'=>'sukses',
            'pesan'=>'Ini contoh response JSON dari Controller',
        ]);
    }
}
