<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BuyController extends Controller
{
    public function index(){
        // $featured_buy_image = Post::where('feature', '1')->take(9)->get();
        // return view('frontend.buy', compact('featured_buy_image'));

        // $posts = Post::where('feature')->get();
        // return view('frontend.buy', compact('posts'));

        $posts=Post::all();
        return view('frontend.buy')->with('posts',$posts);
    }
    public function logged(){
        // $featured_buy_image = Post::where('feature', '1')->take(9)->get();
        // return view('frontend.buy', compact('featured_buy_image'));

        // $posts = Post::where('feature')->get();
        // return view('frontend.buy', compact('posts'));

        $posts=Post::all();
        return view('logged.buy')->with('posts',$posts);
    }

    // public function index()
    // {
    //     $posts=Post::all();
    //     $featured_buy_image = $this->Post->where('feature')->first();
    
    //     return view('frontend.buy', compact('featured_buy_image'));
    // }
}
