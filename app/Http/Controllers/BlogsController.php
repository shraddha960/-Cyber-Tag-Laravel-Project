<?php

namespace App\Http\Controllers;
use App\Models\blogs;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function index () 
    {
        $blogs = blogs::all();
        
        return view('blogs.index', ['blogs' => $blogs]);
    }
    
    public function create () 
    {
        return view('blogs.create');
    }

    public function store (Request $request) 
    {
        $request->validate([
            'content' => 'required'
        ]);

        blogs::create([
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('message', 'Your blog has been added successfully');
    }


    public function show ($user_id)
    {
        return view('blogs.show')
            ->with('blogs', blogs::where('user_id',$user_id)->first());
    }

}
