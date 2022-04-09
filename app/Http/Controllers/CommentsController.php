<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\comments;
use App\Models\blogs;
use App\Http\Controllers\BlogsController;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function index () 
    {
        $comment = comments::all();
        
        return view('comments.index', ['comment' => $comment]);
    }

    public function create () 
    {
        return view('comments.create');
    }

    public function store (Request $request, blogs $blogs) 
    {
        $request->validate([
            'comment' => 'required'
        ]);

        comments::create([
            'comment' => $request->input('comment'),
            'user_id' => auth()->user()->id,
            'blog_id' => $blogs->id
        ]);

        return redirect('/comment')->with('message', 'Your comment has been added successfully');
    }

    public function show (blogs $blogs)
    {
        // return view('comments.show');
        // return redirect('/blog/{{ }}');
        return view('comments.show')
            ->with('comments', blogs::where('blog_id',$blogs)->first());
    }


}
