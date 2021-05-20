<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\cast;
use Illuminate\Http\Request;

class CastshowController extends Controller
{
    public function index()
    {
        $casts = cast::all();
        return view('user/cast_view',compact('casts'));
    }
}
