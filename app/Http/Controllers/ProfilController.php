<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Hardiansyah',
            'nim' => '4124020',
            'prodi' => 'Sistem Informasi'
        ];

        return view('profil', $data);
    }
}