<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index(){
        return view('frontend.rent');
    }
    public function logged(){
        return view('logged.rent');
    }
}
