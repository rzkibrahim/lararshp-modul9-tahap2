<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jenishewan;

class JenisHewanController extends Controller
{
    public function index()
    {
        // $jenisHewan = jenishewan::select('idjenis_hewan', 'nama_jenis_hewan')->get();
        $jenisHewan = jenishewan::all();
        return view('rshp.DataMaster.jenis-hewan.index', compact('jenisHewan'));
    }
}
