<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Amrulah";
        $nim = "4124020";
        $prodi = "Sistem Informasi";
        $semester = "4";

        $keahlian = [
            "HTML",
            "CSS",
            "PHP",
            "Laravel"
        ];

        return view('profil', compact('nama','nim','prodi','semester','keahlian'));
    }

    public function show($nim)
    {
        return "Menampilkan profil dengan NIM: " . $nim;
    }
}