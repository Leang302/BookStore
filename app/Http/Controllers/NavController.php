<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    function aboutUs(){
        
        return view('homepage');

    }
    function book(){
        return view('homepage');
    }
    function contactUs(){
        return view('homepage');
    }
}
