<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Symfony\Component\HttpFoundation\Response;



class RoleController extends Controller
{
    public function getRoles(){
        $roles = Role::all()->pluck('name', 'id');
        $roles->forget('1');
        return response()->json(['roles' => $roles], Response::HTTP_OK);
    }
}
