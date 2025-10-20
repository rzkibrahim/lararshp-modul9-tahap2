<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
    protected $table = 'pemilik';
    protected $primaryKey = 'idpemilik'; // Sesuaikan dengan primary key tabel Anda
    protected $fillable = ['alamat', 'no_wa']; // Sesuaikan dengan kolom yang dapat diisi

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }   
}
