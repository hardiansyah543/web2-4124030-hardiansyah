@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-2xl shadow">

    <h1 class="text-2xl font-bold mb-6 text-center">
        Tambah Produk
    </h1>

    {{-- Error --}}
    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <ul class="list-disc ml-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('katalog.store') }}" method="POST">
        @csrf

        {{-- Nama Produk --}}
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama Produk</label>
            <input 
                type="text" 
                name="nama"
                class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                placeholder="Masukkan nama produk">
        </div>

        {{-- Harga --}}
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Harga</label>
            <input 
                type="number" 
                name="harga"
                class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                placeholder="Masukkan harga">
        </div>

        {{-- Tombol --}}
        <div class="flex justify-between">
            <a href="/katalog" 
               class="bg-gray-400 text-white px-4 py-2 rounded-lg hover:bg-gray-500">
                Kembali
            </a>

            <button 
                type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Simpan
            </button>
        </div>

    </form>
</div>
@endsection