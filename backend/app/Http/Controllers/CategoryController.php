<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Response;


class CategoryController extends Controller
{
    public function getCategoriesForRole(Request $req){
        $parms = $req->all();
        $roleID = $parms['roleID'];
        $categories = Category::all()->where('roleId', '=', $roleID);
        return response()->json(['categories' => $categories], Response::HTTP_OK);
    }
}
