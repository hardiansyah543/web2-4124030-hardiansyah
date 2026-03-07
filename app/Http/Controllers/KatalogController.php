<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $produk = [
            [
                'id' => 1,
                'nama' => 'Laptop',
                'harga' => 7000000,
                'deskripsi' => 'Laptop untuk kerja dan kuliah'
            ],
            [
                'id' => 2,
                'nama' => 'Mouse',
                'harga' => 100000,
                'deskripsi' => 'Mouse wireless yang nyaman digunakan'
            ],
            [
                'id' => 3,
                'nama' => 'Keyboard',
                'harga' => 200000,
                'deskripsi' => 'Keyboard mekanik untuk mengetik cepat'
            ],
            [
                'id' => 4,
                'nama' => 'Monitor',
                'harga' => 1500000,
                'deskripsi' => 'Monitor 24 inch Full HD'
            ],
            [
                'id' => 5,
                'nama' => 'Printer',
                'harga' => 1200000,
                'deskripsi' => 'Printer untuk kebutuhan cetak dokumen'
            ]
        ];

        return view('katalog', compact('produk'));
    }

    public function show($id)
    {
        $produk = [
            1 => ['nama'=>'Laptop','harga'=>7000000,'deskripsi'=>'Laptop untuk kerja dan kuliah'],
            2 => ['nama'=>'Mouse','harga'=>100000,'deskripsi'=>'Mouse wireless yang nyaman digunakan'],
            3 => ['nama'=>'Keyboard','harga'=>200000,'deskripsi'=>'Keyboard mekanik'],
            4 => ['nama'=>'Monitor','harga'=>1500000,'deskripsi'=>'Monitor 24 inch'],
            5 => ['nama'=>'Printer','harga'=>1200000,'deskripsi'=>'Printer untuk cetak dokumen']
        ];

        $p = $produk[$id];

        return view('detail', compact('p'));
    }
}