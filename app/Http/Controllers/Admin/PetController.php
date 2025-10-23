<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pet = pet::all();
        return view('rshp.DataMaster.pet.index', compact('pet'));
    }
}
