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

// Route::get('about/{nama}', function ($nama) {
//     return "halaman profile : " .$nama;
//     $calculator = 1 + 5;
//     return view('about', compact('nama', 'calculator'));
// });


//latihan kang candra
// if blade conditional
Route::get('pesan/{menu?}', function ($menu = "silahkan masukan pesanan") {
    return view('pages.pesan', compact('menu'));
});

Route::get('pemesanan/{menu1?}/{menu2?}/{menu3?}', function ($menu1 = "silahkan masukan pesanan", $menu2 = null, $menu3 = null) {
    return view('pages.pemesanan', compact('menu1', 'menu2','menu3'));
});

//controller
// Route::get('profile', function () {
//    return view('profile');
// });

// HTTP VREB
//GET, POST, PUT/PATCH, DELETE

// 1. Membuat controller
    // a. NamaController
// 2. Membuat fungsi fungsi yang ada di controller
Route::get('hallo', 'LatihanController@hallo');
Route::get('profile', 'LatihanController@profile');
Route::get('facebook/{nama}/{jk}/{perkalian}', 'LatihanController@facebook');
Route::get('siswa', 'LatihanController@siswa');
Route::get('bmi/{berat}/{tinggi}', 'LatihanController@berat_badan');
Route::get('mahasiswa', 'LatihanController@mahasiswa');
Route::get('mahasiswa2', 'LatihanController@mahasiswa2');
Route::get('kampus', 'LatihanController@kampus');
Route::get('table', 'LatihanController@table');
Route::get('belanja', 'LatihanController@belanja');

//latihan model, migration & seeder
//route siswa
Route::get('siswa', 'SiswaController@tampil');
// 3. daftarkan controller di web.php