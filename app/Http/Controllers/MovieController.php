<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie:: orderBy('vote', 'desc') ->get();
        
        // dump($movies);
        return view('home', compact('movies'));
    }

}
