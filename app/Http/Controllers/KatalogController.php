<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $produk = [
            ['id'=>1,'nama'=>'Laptop','harga'=>7000000],
            ['id'=>2,'nama'=>'Mouse','harga'=>150000],
            ['id'=>3,'nama'=>'Keyboard','harga'=>300000],
            ['id'=>4,'nama'=>'Monitor','harga'=>2000000],
            ['id'=>5,'nama'=>'Flashdisk','harga'=>80000],
            ['id'=>6,'nama'=>'Setoran Tabungan','harga'=>0],
            ['id'=>7,'nama'=>'Penarikan Tabungan','harga'=>0],
            ['id'=>8,'nama'=>'Cek Saldo','harga'=>0],
            ['id'=>9,'nama'=>'Riwayat Transaksi','harga'=>0],
            ['id'=>10,'nama'=>'Monitoring Wali Santri','harga'=>0],
        ];

        return view('katalog.index', compact('produk'));
    }

    public function show($id)
    {
        $produk = [
            ['id'=>1,'nama'=>'Laptop','harga'=>7000000],
            ['id'=>2,'nama'=>'Mouse','harga'=>150000],
            ['id'=>3,'nama'=>'Keyboard','harga'=>300000],
            ['id'=>4,'nama'=>'Monitor','harga'=>2000000],
            ['id'=>5,'nama'=>'Flashdisk','harga'=>80000],
            ['id'=>6,'nama'=>'Setoran Tabungan','harga'=>0],
            ['id'=>7,'nama'=>'Penarikan Tabungan','harga'=>0],
            ['id'=>8,'nama'=>'Cek Saldo','harga'=>0],
            ['id'=>9,'nama'=>'Riwayat Transaksi','harga'=>0],
            ['id'=>10,'nama'=>'Monitoring Wali Santri','harga'=>0],
        ];

        foreach ($produk as $item) {
            if ($item['id'] == $id) {
                return view('katalog.show', compact('item'));
            }
        }

        abort(404);
    }

    // ✅ TAMBAHAN FITUR CREATE
    public function create()
    {
        return view('katalog.create');
    }

    // ✅ TAMBAHAN FITUR STORE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric'
        ]);

        // (sementara belum simpan database)
        return redirect()->route('katalog.index')
                         ->with('success', 'Produk berhasil ditambahkan!');
    }
}