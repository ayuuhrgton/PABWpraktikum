@php
    $tinggi = $item->tinggi_genangan;

    if ($tinggi < 30) {
        $status = 'Waspada';
        $class = 'waspada';
    } elseif ($tinggi <= 70) {
        $status = 'Siaga';
        $class = 'siaga';
    } else {
        $status = 'Awas';
        $class = 'awas';
    }
@endphp

<div class="card">
    <h3>{{ $item->lokasi }}</h3>
    <p><strong>Nama Pelapor:</strong> {{ $item->nama_pelapor }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $tinggi }} cm</p>
    <p><strong>Tanggal Kejadian:</strong> {{ $item->tanggal_kejadian }}</p>
    <p>
        <strong>Status:</strong>
        <span class="{{ $class }}">{{ $status }}</span>
    </p>
</div>