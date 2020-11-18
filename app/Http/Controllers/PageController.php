<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact()
    {
    	return view('frontend.contact');
    }
}
