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

route::get('/datamaster/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');
route::get('/datamaster/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index'])->name('admin.pemilik.index');
route::get('/datamaster/pet', [App\Http\Controllers\Admin\PetController::class, 'index'])->name('admin.pet.index');
route::get('/datamaster/jenis-hewan', [App\Http\Controllers\Admin\JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');   
route::get('/datamaster/ras-hewan', [App\Http\Controllers\Admin\RasHewanController::class, 'index'])->name('admin.ras-hewan.index');    
route::get('/datamaster/role', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('admin.role.index');
route::get('/datamaster/kategori', [App\Http\Controllers\Admin\KategoriController::class, 'index'])->name('admin.kategori.index');
route::get('/datamaster/kk', [App\Http\Controllers\Admin\KategoriKlinisController::class, 'index'])->name('admin.kategori-klinis.index');
route::get('/datamaster/ktt', [App\Http\Controllers\Admin\KodeTindakanTerapiController::class, 'index'])->name('admin.kode-tindakan-terapi.index');

use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KategoriKlinisController;
use App\Http\Controllers\Admin\KodeTindakanTerapiController;

Route::prefix('admin')->name('admin.')->group(function () {
    
    // Kategori
    Route::resource('kategori', KategoriController::class);
    
    // Kategori Klinis
    Route::resource('kategoriKlinis', KategoriKlinisController::class);
    
    // Kode Tindakan Terapi
    Route::resource('kodeTindakanTerapi', KodeTindakanTerapiController::class);
});

// INI ROTE LOGIN/LOGOUT
// Tampilkan halaman login
Route::get('/login', function () {
    return view('rshp.auth.login'); // sesuaikan path blade kamu
})->name('login');

// Proses form login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
