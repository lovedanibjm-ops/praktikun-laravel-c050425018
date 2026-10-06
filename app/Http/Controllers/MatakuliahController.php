<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller

{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }
    public function create(){return 'create:form tambah matakuliah';}
    public function store(Request $request) {return 'store: simpan data baru '; }
    public function show(Matakuliah $matakuliah) 
    {
        return view('matakuliah.show', compact('matakuliah'));
    }
    public function edit($id) {return "edit: form edit Matakuliah id {$id}"; }
    public function update(Request $request, $id) {return "update: perbarui data id {$id}"; }
    public function destroy($id) {return "destroy: hapus data id {$id}"; }
}
