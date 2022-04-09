<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;

class HomeController extends Controller
{
    //
    public function index () 
    {
        $blogs = blogs::all();
        
        return view('home.home', ['blogs' => $blogs]);
    }
}
