<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function form()
    {
        return view('laporan.form');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'nama_pelapor' => 'required|string|max:255',
        'lokasi' => 'required|string|max:255',
        'tinggi_genangan' => 'required|integer|min:1|max:1000',
        'tanggal_kejadian' => 'required|date',
    ]);

    $laporan = Laporan::create($data);

    return view('laporan.konfirmasi', compact('laporan'));
}

    public function index()
    {
        $laporan = Laporan::all();

        return view('laporan.index', compact('laporan'));
    }
}