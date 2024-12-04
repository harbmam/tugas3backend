<?php

use Illuminate\Support\Facades\Route;

//memanggil santri controller
use App\Http\Controllers\SantriController;
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

Route::get('/salam', function () {
    return "Assalamu'alaikum, Selamat Belajar Laravel Di PeTIK Jombang Angkatan III";
});

//routing parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return "Nama Pegawai : ".$nama."<br>Depatemen : ".$divisi;
});

//tambahkan routes baru di routes/web.php
Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/santri',
[SantriController::class, 'datasantri']
);
