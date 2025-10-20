<?php

use App\Http\Controllers\rshp\AuthController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rshp\rshpController;

// INI ROTE UNTUK CEK KONEKSI DATABASE
Route::get('/cek-koneksi', [rshpController::class, 'cekKoneksi'])->name('site.cek-koneksi');

// INI ROTE UNTUK HALAMAN UTAMA
Route::get('/', [rshpController::class, 'index'])->name('home');
Route::get('/struktur', [rshpController::class, 'struktur'])->name('struktur');
Route::get('/layanan', [rshpController::class, 'layanan'])->name('layanan');
Route::get('/visi-misi', [rshpController::class, 'visiMisi'])->name('visi-misi');

route::get('/datamaster/jenis-hewan', [App\Http\Controllers\Admin\JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');   
route::get('/datamaster/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index'])->name('admin.pemilik.index');

// INI ROTE LOGIN/LOGOUT
// Tampilkan halaman login
Route::get('/login', function () {
    return view('rshp.auth.login'); // sesuaikan path blade kamu
})->name('login');

// Proses form login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
