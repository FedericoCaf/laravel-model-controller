<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function series(){

        return view('series');
    }

    public function reviews(){

        return view('reviews');
    }

    public function about(){

        return view('about');
    }
}
