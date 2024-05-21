<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('created_at', 'DESC')->get();

        return view('dataMahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataMahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request -> validate([
            'NIM' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Nama_Ayah' => 'required',
            'Nama_Ibu' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('dataMahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
  
        return view('dataMahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
  
        return view('dataMahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
  
        $mahasiswa->update($request->all());
  
        return redirect()->route('dataMahasiswa')->with('success', 'Data Mahasiswa Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
  
        $mahasiswa->delete();
  
        return redirect()->route('dataMahasiswa')->with('success', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
