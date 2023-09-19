<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return '<h1>Ini menggunakan Laravel</h1>';
});

Route::get('tampilan/{nilai}', function ($nilai) {
    return 'Nilai saya adalah ' . $nilai;
});

Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari penjumlahan adalah ' . $nilai1 + $nilai2;
});
Route::get('kurang/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari pengurangan adalah ' . $nilai1 - $nilai2;
});
Route::get('kali/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari perkalian adalah ' . $nilai1 * $nilai2;
});
Route::get('bagi/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil dari pembagian adalah ' . $nilai1 / $nilai2;
});

Route::get('tampilan', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('table', function () {
    $data = ['meja', 'kursi', 'lampu', 'buku', 'pensil', 'monitor', 'komputer'];
    // return view('table', ['data' => $data]);
    return view('table', compact('data'));
});

// Route::get('users/{id}', function ($id) {});
// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});
