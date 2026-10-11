<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaporBanjir')</title>
    <style>
        * {box-sizing: border-box;}
        body {margin: 0; font-family: Arial, sans-serif;background: #f4f7f9;color: #333;}
        header { background: #087e81; color: white;padding: 20px 40px;}
        header h1 {margin: 0 0 10px;}
        nav a {color: white; text-decoration: none;margin-right: 20px;}
        main {max-width: 900px; margin: 30px auto; padding: 0 20px; min-height: 500px;}
        .card {background: white; padding: 20px; margin-bottom: 15px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);}
        label {display: block; margin-top: 15px; margin-bottom: 5px;}
        input {width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;}
        button {margin-top: 20px; padding: 10px 20px; background: #087e81; color: white; border: none;  border-radius: 5px; cursor: pointer;}
        .alert {padding: 15px; background: #d4edda; color: #155724; border-radius: 5px; margin-bottom: 20px;}
        footer { text-align: center; background: #222; color: white; padding: 20px;}
        .waspada {color: #f8ec44;}
        .siaga {color: #e67e22;}
        .awas {color: #c0392b;}
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        <nav>
            <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
            <a href="{{ route('laporan.form') }}">Laporkan Banjir</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; 2026 BPBD Kabupaten Bandung - LaporBanjir - Yayu Rahma Dewi
    </footer>
</body>
</html>