<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//basic route
Route::get('halaman-2', function () {
    return "halaman 2";
});
//basic route
Route::get('halaman-3', function () {
    return "halaman 3";
});
//contoh parameter
Route::get('halaman-3/{nama}', function ($nama) {
    return "halaman 3 " .$nama;
});
//contoh parameter
Route::get('halaman-profile/{nama}/jenis-kelamin/{jk}', function ($nama, $jk) {
    return "halaman profile : " .$nama ." Dengan jenis kelamin : " .$jk;
});

//opsional parameter
Route::get('halaman-profile/{nama?}', function ($nama = "Belum ada nama") {
    return "halaman profile : " .$nama;
});

// latihan
Route::get('about/{nama}', function ($nama) {
    // return "halaman profile : " .$nama;
    return view('about', compact('nama'));
});

Route::get('about/{nama}', function ($nama) {
    // return "halaman profile : " .$nama;
    $calculator = 1 + 5;
    return view('about', compact('nama', 'calculator'));
});


//latihan kang candra
Route::get('pesan/{menu?}', function ($menu = "silahkan masukan pesanan") {
    return view('pages.pesan', compact('menu'));
});

Route::get('pemesanan/{menu1?}/{menu2?}/{menu3?}', function ($menu1 = "silahkan masukan pesanan", $menu2 = null, $menu3 = null) {
    return view('pages.pemesanan', compact('menu1', 'menu2','menu3'));
});