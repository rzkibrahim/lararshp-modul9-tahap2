<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function index()
    {
        $pet = Pet::with(['pemilik.user', 'rasHewan.jenisHewan'])->get();
        // Kirim array mapping jenis kelamin
        $jenisKelaminText = ['M' => 'Jantan', 'F' => 'Betina'];
        return view('rshp.DataMaster.pet.index', compact('pet', 'jenisKelaminText'));
    }
}
