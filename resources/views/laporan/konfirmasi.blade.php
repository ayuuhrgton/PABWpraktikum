@extends('layouts.app')
@section('title', 'Konfirmasi Laporan')
@section('content')
    <x-alert type="success">
        Laporan banjir berhasil disimpan.
    </x-alert>

    <p><strong>Nama pelapor:</strong> {{ $laporan->nama_pelapor }}</p>
    <p><strong>Lokasi:</strong> {{ $laporan->lokasi }}</p>
    <p><strong>Tinggi genangan:</strong> {{ $laporan->tinggi_genangan }} cm</p>
    <p><strong>Tanggal kejadian:</strong> {{ $laporan->tanggal_kejadian }}</p>

    <p><a href="{{ route('laporan.index') }}">Lihat semua laporan</a></p>
    <p><a href="{{ route('laporan.form') }}">Kirim laporan lain</a></p>
@endsection