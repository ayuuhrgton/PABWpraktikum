<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function simpan(Request $request)
    {
        mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
        ]);

        return "Data mahasiswa berhasil disimpan.";
    }
    public function daftar()
    {
        $data = mahasiswa::all();
        return view('mahasiswa', ['mahasiswa' => $data]);
    }
}
