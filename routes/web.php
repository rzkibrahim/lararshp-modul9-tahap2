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

// Authentication Routes
Auth::routes();

// Tambahkan di routes/web.php (temporary)
Route::get('/force-logout', function() {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/')->with('success', 'Logout berhasil');
});

// Tambahkan di routes/web.php (temporary)
Route::get('/check-auth', function() {
    if (Auth::check()) {
        return 'User sedang login: ' . Auth::user()->email;
    }
    return 'User belum login';
});

// akses Admin
route::middleware(['isAdministrator'])->group(function () {
    route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardAdminController::class, 'index'])->name('admin.dashboard');
    route::get('/datamaster/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');
    route::get('/datamaster/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index'])->name('admin.pemilik.index');
    route::get('/datamaster/pet', [App\Http\Controllers\Admin\PetController::class, 'index'])->name('admin.pet.index');
    route::get('/datamaster/jenis-hewan', [App\Http\Controllers\Admin\JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');
    route::get('/datamaster/ras-hewan', [App\Http\Controllers\Admin\RasHewanController::class, 'index'])->name('admin.ras-hewan.index');
    route::get('/datamaster/role', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('admin.role.index');
    route::get('/datamaster/kategori', [App\Http\Controllers\Admin\KategoriController::class, 'index'])->name('admin.kategori.index');
    route::get('/datamaster/kk', [App\Http\Controllers\Admin\KategoriKlinisController::class, 'index'])->name('admin.kategori-klinis.index');
    route::get('/datamaster/ktt', [App\Http\Controllers\Admin\KodeTindakanTerapiController::class, 'index'])->name('admin.kode-tindakan-terapi.index');
});

// akses Resepsionis
Route::middleware(['isResepsionis'])->group(function () {
    Route::get('/resepsionis/dashboard', [App\Http\Controllers\Resepsionis\DashboardResepsionisController::class, 'index'])->name('resepsionis.dashboard');
}); 
