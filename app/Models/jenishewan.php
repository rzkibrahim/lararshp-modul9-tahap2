<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jenishewan extends Model
{
    protected $table = 'jenis_hewan';
    protected $primaryKey = 'idjenis_hewan'; // Sesuaikan dengan primary key tabel Anda
    protected $fillable = ['nama_jenis_hewan']; // Sesuaikan dengan kolom yang dapat diisi
}
