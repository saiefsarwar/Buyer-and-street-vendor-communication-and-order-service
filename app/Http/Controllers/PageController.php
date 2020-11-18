<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class PageController extends Controller
{
    public function landingPage()
    {
        $categories = Category::all();
        return view('frontend.landing-page')->with(['categories'=> $categories]);
    }
}
