<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'idkategori';
    
    protected $fillable = ['nama_kategori'];
    
    // One to Many dengan Kategori Klinis
    public function kategoriKlinis()
    {
        return $this->hasMany(KategoriKlinis::class, 'idkategori', 'idkategori');
    }
    
    // One to Many dengan Kode Tindakan Terapi
    public function kodeTindakanTerapi()
    {
        return $this->hasMany(KodeTindakanTerapi::class, 'idkategori', 'idkategori');
    }
}