<h1>Daftar Produk</h1>

<ul>
@foreach($produk as $item)
<li>
{{ $item['nama'] }} - Rp {{ $item['harga'] }}
<a href="/katalog/{{ $item['id'] }}">Detail</a>
</li>
@endforeach
</ul>