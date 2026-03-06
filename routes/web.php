<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', function () {
    return '
<<<<<<< HEAD
        <h1>Halo! Nama saya Amrulloh</h1>
=======
        <h1>Halo! Nama saya Amrulah</h1>
        <h2>Perkenalkan nama saya hardiansyah</h2>
>>>>>>> f0898b04ad3cfe08713dd8e35d45b5009b8c7cd9
        <p>NIM: 4124020 | Prodi: Sistem Informasi</p>
        <p>Saya siap belajar Laravel! 🚀</p>
    ';
    Route::get('/andi', function () {
    return 'Halo, saya hardiansyah (Kolaborator)';
});
});