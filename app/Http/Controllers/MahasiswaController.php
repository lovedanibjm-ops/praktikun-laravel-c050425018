<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {return 'index: daftar mahasiswa';}
    public function create(){return 'create:form tambah mahasiswa';}
    public function store(Request $request) {return 'store: simpan data baru '; }
    public function show(Mahasiswa $mahasiswa) {return "Nama Mahasiswa: {$mahasiswa->nama}"; }
    public function edit($id) {return "edit: form edit mahasiswa id {id}"; }
    public function update(Request $request, $id) {return "update: perbarii data id {$id}"; }
    public function destroy($id) {return "destroy: hapus data id {$id}"; }
}
