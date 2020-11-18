<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontend.shop')->with(['categories'=> $categories]);
    }
}
