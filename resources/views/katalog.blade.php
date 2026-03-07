<!DOCTYPE html>
<html>
<head>
<title>Katalog Produk</title>
</head>
<body>

<h1>Daftar Produk</h1>

<ul>
@foreach($produk as $p)
<li>
    <b>{{ $p['nama'] }}</b><br>
    Harga : Rp {{ $p['harga'] }} <br>

    <a href="{{ route('produk.detail', $p['id']) }}">
        Lihat Detail
    </a>

</li>
<br>
@endforeach
</ul>

</body>
</html>