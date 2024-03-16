<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{
    public function getUser(){
        return response()->json(['user' => Auth::user()], Response::HTTP_OK);
    }
    
    public function getUsers(){

        return response()->json(['users' => User::all()], Response::HTTP_OK);
    }
}