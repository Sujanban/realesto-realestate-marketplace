<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('frontend.product');
    }
    public function logged(){
        return view('logged.product');
    }

    // public function viewPost(string $contact){

    //     $posts = Post::where('conatct',$contact)->first();
    //     return view('frontend.test', compact('posts'));
        
    //     // $posts=Post::where('contact', $post_slug->id)->first();
    //     // return view('frontend.test')->with('contact',$post_slug);


    //     // $posts=Post::all();
    //     // return view('frontend.buy')->with('posts',$posts);
    // }
}
