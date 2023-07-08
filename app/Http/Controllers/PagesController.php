<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class PagesController extends Controller
{
    public function roles()
    {
        $roles = Role::getRoles();
        
        return view('roles', [
            'roles' => $roles
        ]);
    }
}
