<h1>Detail Produk</h1>

<p>Nama Produk : {{ $item['nama'] }}</p>
<p>Harga : Rp {{ $item['harga'] }}</p>

<a href="/katalog">Kembali</a>

<h1>Detail Fitur</h1>

<p>Nama Fitur : {{ $item['nama'] }}</p>

<p>Biaya : {{ $item['harga'] }}</p>

<a href="{{ route('katalog.index') }}">Kembali ke katalog</a>

<a href="{{ route('katalog.create') }}" 
   class="bg-green-500 text-white px-4 py-2 rounded-lg">
   Tambah Produk
</a>