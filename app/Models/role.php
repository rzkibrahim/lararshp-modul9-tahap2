<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'idrole';
    
    protected $fillable = ['nama_role'];
    
    // Many to Many dengan User
    public function user()
    {
        return $this->belongsToMany(User::class, 'role_user', 'idrole', 'iduser')
            ->withPivot('status', 'idrole_user');
    }
}
