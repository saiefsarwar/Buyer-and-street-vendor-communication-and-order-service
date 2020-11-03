<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingPage()
    {
        $categories = Category::all();
        return view('frontend.landing-page')->with(['categories'=> $categories]);
    }
}
