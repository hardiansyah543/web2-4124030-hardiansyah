<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $produk = [
            ['id'=>1,'nama'=>'Setoran Tabungan','harga'=>0],
            ['id'=>2,'nama'=>'Penarikan Tabungan','harga'=>0],
            ['id'=>3,'nama'=>'Cek Saldo','harga'=>0],
            ['id'=>4,'nama'=>'Riwayat Transaksi','harga'=>0],
            ['id'=>5,'nama'=>'Monitoring Wali Santri','harga'=>0],
        ];

        return view('katalog.index', compact('produk'));
    }

    public function show($id)
    {
        $produk = [
            ['id'=>1,'nama'=>'Setoran Tabungan','harga'=>0],
            ['id'=>2,'nama'=>'Penarikan Tabungan','harga'=>0],
            ['id'=>3,'nama'=>'Cek Saldo','harga'=>0],
            ['id'=>4,'nama'=>'Riwayat Transaksi','harga'=>0],
            ['id'=>5,'nama'=>'Monitoring Wali Santri','harga'=>0],
        ];

        foreach ($produk as $p) {
            if ($p['id'] == $id) {
                return view('katalog.show', compact('p'));
            }
        }
    }
}