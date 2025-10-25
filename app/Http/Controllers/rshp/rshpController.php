<?php

namespace App\Http\Controllers\rshp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class rshpController extends Controller
{
    public function index()
    {
        return view('rshp.home');
    }

    public function struktur()
    {
        return view('rshp.menu.struktur');
    }

    public function layanan()
    {
        return view('rshp.menu.layanan');
    }

    public function visiMisi()
    {
        return view('rshp.menu.visi-misi');
    }

    public function cekKoneksi()
    {
        try {
            DB::connection()->getPdo();
            return 'Koneksi database berhasil!';
        } catch (\Exception $e) {
            return 'Gagal koneksi database: ' . $e->getMessage();
        }
    }
}
