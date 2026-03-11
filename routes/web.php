<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perkenalan', function () {
    return '
        <h1>Halo! Nama saya Amrulah</h1>
        <h2>Perkenalkan nama saya Hardiansyah</h2>
        <p>NIM: 4124020 | Prodi: Sistem Informasi</p>
        <p>Saya siap belajar Laravel! 🚀</p>
    ';
});

Route::get('/andi', function () {
    return 'Halo, saya Hardiansyah (Kolaborator)';
});


Route::get('/lailatul', function () {
    return '
        <h1>Halo! Nama saya Lailatul Nur Aifa Rahmawati</h1>
        <p>NIM: 4124007 | Prodi: Sistem Informasi</p>
        <p>Saya siap belajar Laravel! (Kolaborator)</p>
    ';
});

/* =========================
   Route Aplikasi Santri Pay
========================= */

Route::get('/santripay', function () {
    return '
        <h1>Santri Pay</h1>
        <p>Selamat datang di aplikasi pembayaran santri.</p>
    ';
})->name('santripay.index');


Route::get('/santripay/pesan', function () {
    return '
        <h1>Halaman Pemesanan</h1>
        <p>Santri dapat memesan kebutuhan seperti kitab, sarung, dan alat tulis.</p>
    ';
})->name('santripay.pesan');


Route::get('/santripay/pembayaran', function () {
    return '
        <h1>Halaman Pembayaran</h1>
        <p>Santri dapat melakukan pembayaran pesanan di halaman ini.</p>
    ';
})->name('santripay.pembayaran');