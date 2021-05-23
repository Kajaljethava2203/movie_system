<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Theater;
use Illuminate\Http\Request;

class TheatershowController extends Controller
{
    public function index()
    {
       $theaters = Theater::all();
       return view('user/theater',compact('theaters'));
    }
    public function viewseat()
    {
        return view('user/seats');
    }
}
