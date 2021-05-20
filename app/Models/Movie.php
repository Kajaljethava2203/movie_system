<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
//    protected $fillable = [
//        'title',
//        'overview',
//        'release_year',
//        'runtime',
//        'cast',
//        'poster'
//    ];
    public function casts(){
        return $this->belongsToMany('App\Models\cast','casts');
    }
}
