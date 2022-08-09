<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BuyController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view('frontend.buy')->with('posts',$posts);
    }

}
