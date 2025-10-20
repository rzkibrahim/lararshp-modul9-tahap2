<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pemilik;
use App\Models\User;

class PemilikController extends Controller
{
    public function index()
    {
        $pemilik = pemilik::with('user')->orderBy('idpemilik', 'asc')->get();
        return view('rshp.DataMaster.pemilik.index', compact('pemilik'));
    }
}
