<!DOCTYPE html>
<html>
<head>
<title>Detail Produk</title>
</head>
<body>

<h1>Detail Produk</h1>

<p>Nama Produk : {{ $p['nama'] }}</p>
<p>Harga : Rp {{ $p['harga'] }}</p>
<p>Deskripsi : {{ $p['deskripsi'] }}</p>

<a href="{{ route('katalog') }}">Kembali ke katalog</a>

</body>
</html>