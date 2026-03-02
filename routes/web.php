<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route baru – wajib ditambahkan!
Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Hardiansyah</h1>
            <p>NIM: 4124030 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel! 🚀</p>';
});
