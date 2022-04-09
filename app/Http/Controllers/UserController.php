<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\blogs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index () 
    {

        $user = User::all();
        
        return view('user.index', ['user' => $user]);
    }

    public function show ($user_id)
    {

        $blogs = blogs::where('user_id',$user_id)->first();
        if($blogs == null)
        {
            // return redirect()->back()->with('message', 'no user!');
            return redirect()->back()->with('error', 'no user!');
        }
        else {
            return view('user.show')
            ->with('blogs', blogs::where('user_id',$user_id)->first());
        }
        // return view('user.show')
        //     ->with('blogs', blogs::where('user_id',$user_id)->first());

    }

}
