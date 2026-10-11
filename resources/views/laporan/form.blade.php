@extends('layouts.app')
@section('title', 'Laporkan Banjir')
@section('content')
    <h2>Form Pelaporan Banjir</h2>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <label for="nama_pelapor">Nama Pelapor</label>
        <input
            type="text"
            id="nama_pelapor"
            name="nama_pelapor"
            value="{{ old('nama_pelapor') }}"
            required
        >
        <label for="lokasi">Lokasi Kejadian</label>
        <input
            type="text"
            id="lokasi"
            name="lokasi"
            value="{{ old('lokasi') }}"
            required
        >
        <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
        <input
            type="number"
            id="tinggi_genangan"
            name="tinggi_genangan"
            min="1"
            value="{{ old('tinggi_genangan') }}"
            required
        >
        <label for="tanggal_kejadian">Tanggal Kejadian</label>
        <input
            type="date"
            id="tanggal_kejadian"
            name="tanggal_kejadian"
            value="{{ old('tanggal_kejadian') }}"
            required
        >
        <button type="submit">Kirim Laporan</button>
    </form>
@endsection