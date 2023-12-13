<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\category;

class Categories extends Controller
{
    public function GetCategories(){
        $category=category::all();
        $categories=$category;
        return response()->json([
            'category'=>$categories,
        ]);

    }
}
