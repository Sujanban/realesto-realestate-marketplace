<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index(){
        return view('frontend.terms');
    }
    public function logged(){
        return view('logged.terms');
    }
}
