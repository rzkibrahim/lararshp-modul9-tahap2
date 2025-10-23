<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = 'role_user';
    protected $primaryKey = 'idrole_user';
    
    protected $fillable = ['iduser', 'idrole', 'status'];
    
    // Belongs to Role
    public function role()
    {
        return $this->belongsTo(Role::class, 'idrole', 'idrole');
    }
    
    // Belongs to User
    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }
        
}