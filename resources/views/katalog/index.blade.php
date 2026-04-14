@extends('layouts.app')

@section('title', 'Katalog')

@section('content')
<h1 class="text-2xl font-bold mb-4">Katalog Fitur Santri Pay</h1>

<a href="{{ route('katalog.create') }}" 
   class="bg-green-500 text-white px-4 py-2 rounded-lg inline-block mb-4">
   + Tambah Produk
</a>

<ul class="space-y-2">
@foreach ($produk as $p)
    <li class="bg-white p-4 shadow rounded">
        {{ $p['nama'] }}

        <a href="{{ route('katalog.show', $p['id']) }}" 
           class="text-purple-500 ml-2">
           Lihat Detail
        </a>
    </li>
@endforeach
</ul>
@endsection