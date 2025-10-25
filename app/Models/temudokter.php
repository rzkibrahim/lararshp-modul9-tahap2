<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class temudokter extends Model
{
    protected $table = 'temu_dokter';
    
    // Jika ada kolom tambahan selain FK, tambahkan di sini
    protected $fillable = ['idrekam_medis', 'idrole_user'];
    
    // Relasi ke Rekam Medis
    public function rekamMedis()
    {
        return $this->belongsTo(RekamMedis::class, 'idrekam_medis', 'idrekam_medis');
    }
    
    // Relasi ke Role User (Dokter)
    public function roleUser()
    {
        return $this->belongsTo(RoleUser::class, 'idrole_user', 'idrole_user');
    }
}