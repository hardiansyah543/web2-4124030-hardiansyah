<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Di sini kita mendefinisikan semua route untuk aplikasi Laravel
|
*/


/*
| Route Halaman Utama
*/
Route::get('/', function () {
    return view('welcome');
})->name('home');


/*
| 3 ROUTE STATIS
*/

Route::get('/perkenalan', function () {
    return '
        <h1>Halo! Nama saya Hardiansyah</h1>
        <p>NIM: 4124030</p>
        <p>Prodi: Sistem Informasi</p>
        <p>Saya siap belajar Laravel! 🚀</p>
    ';
})->name('perkenalan');

Route::get('/about', function () {
    return "Ini adalah halaman About";
})->name('about');

Route::get('/kontak', function () {
    return "Ini adalah halaman Kontak";
})->name('kontak');


/*
| ROUTE CONTROLLER
*/

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');


/*
| ROUTE DINAMIS (PARAMETER)
*/

Route::get('/produk/{id}', [KatalogController::class, 'show'])->name('produk.detail');