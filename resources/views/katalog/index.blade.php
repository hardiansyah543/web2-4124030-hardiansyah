<h1>Katalog Fitur Santri Pay</h1>

<ul>
@foreach ($produk as $p)

<li>
    {{ $p['nama'] }} 
    - 
    <a href="{{ route('katalog.show', $p['id']) }}">
        Lihat Detail
    </a>
</li>

@endforeach
</ul>