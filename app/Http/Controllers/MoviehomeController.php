<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviehomeController extends Controller
{
    public function index()
    {
        $movies=Movie::all();
        return view('user/movie_home',compact('movies'));
    }

}
