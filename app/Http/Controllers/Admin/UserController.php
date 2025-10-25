<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
        public function index()
    {
        // Eager loading roles dengan pivot (status)
        $user = User::with('roles')->get();
        $userRoleText = ['1' => 'Aktif', '0' => 'Non-Aktif'];
        return view('rshp.DataMaster.user.index', compact('user', 'userRoleText'));
    }
}
