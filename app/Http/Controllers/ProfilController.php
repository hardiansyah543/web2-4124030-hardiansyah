<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Hardiansyah',
            'nim' => '4124030',
            'prodi' => 'Sistem Informasi',
            'semester' => 4,
            'keahlian' => ['HTML', 'CSS', 'Laravel', 'PHP']
        ];

        return view('profil', $data);
    }

    public function show($nim)
    {
        return "Menampilkan profil mahasiswa dengan NIM: " . $nim;
    }
}