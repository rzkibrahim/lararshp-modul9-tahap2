<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    protected $table = 'pemilik';
    protected $primaryKey = 'idpemilik';
    
    protected $fillable = ['no_wa', 'alamat', 'iduser'];
    
    // One to One dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }
    
    // One to Many dengan Pet
    public function pets()
    {
        return $this->hasMany(Pet::class, 'idpemilik', 'idpemilik');
    }
}
