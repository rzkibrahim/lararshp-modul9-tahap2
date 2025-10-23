<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekam_medis';
    protected $primaryKey = 'idrekam_medis';
    
    protected $fillable = ['created_at', 'anamnesa', 'temuan_klinis', 'diagnosa', 'idpet'];
    
    // Belongs to Pet
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'idpet', 'idpet');
    }
    
    // Many to Many dengan Role User (melalui dokter_pemeriksa)
    public function detailRekamMedis()
    {
        return $this->hasMany(DetailRekamMedis::class, 'idrekam_medis', 'idrekam_medis');
    }
}
