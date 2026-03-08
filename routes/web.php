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
})->name('home.index');


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
})->name('perkenalan.index');

Route::get('/about', function () {
    return "Ini adalah halaman About";
})->name('about.index');

Route::get('/kontak', function () {
    return "Ini adalah halaman Kontak";
})->name('kontak.index');


/*
| ROUTE CONTROLLER PROFIL
*/

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');

Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');


/*
| ROUTE CONTROLLER KATALOG
*/

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');

Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');