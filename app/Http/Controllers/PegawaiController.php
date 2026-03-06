<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai as Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.pegawai', compact('pegawai'));    
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'nip' => 'required|numeric|digits:18',
            'email' => 'required|email|unique:pegawais,email',
            'bidang' => 'required|max:255',
        ]);
        // Simpan data ke database
        Pegawai::create($validate);
        // Redirect ke halaman daftar pegawai dengan pesan sukses
        return redirect('/pegawai')->with('success', 'Pegawai berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }   

    public function update(Request $request, string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'nip' => 'required|numeric|digits:18',
            'email' => 'required|email|unique:pegawais,email,' . $pegawai->id,
            'bidang' => 'required|max:255',
        ]);
        $pegawai->update($validate);
        return redirect('/pegawai')->with('success', 'Pegawai berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect('/pegawai')->with('success', 'Pegawai berhasil dihapus!');
    }

}
