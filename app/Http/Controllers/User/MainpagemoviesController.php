<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MainpagemoviesController extends Controller
{
    public function index()
    {
        return view('page_movie',['trending'=>Movie::where('is_trending','on')->get()->take(5),'popular'=>Movie::where('is_popular','on')->get()->take(5)]);
    }
}
