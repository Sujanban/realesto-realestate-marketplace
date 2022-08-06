<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{
    public function index(){
        // return view('frontend.index');
        $posts=Post::all()->take(3);
        return view('frontend.index')->with('posts',$posts);
    }

    
    public function logged(){
        $posts=Post::all()->take(3);
        return view('logged.index')->with('posts',$posts);
    }
}
