<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('pesan', 'Mata Kuliah Ditambahkan');
    }

    public function show(Matakuliah $matakuliah)
    {
        $matakuliah->load('nilai.mahasiswa'); 
        return view('matakuliah.show', compact('matakuliah'));
    }

    public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, Matakuliah $matakuliah)
    {
        $matakuliah->update($request->all());
        return redirect()->route('matakuliah.index')->with('pesan', 'Mata Kuliah Diperbarui');
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
    return redirect()->route('matakuliah.index')->with('pesan', 'Mata Kuliah Dihapus');
    }
}
