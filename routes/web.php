<?php
//
//use Illuminate\Support\Facades\Route;
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\MoviehomeController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\CastshowController;
use App\Http\Controllers\User\SeatshowController;

Route::get('/seats', function () {
    return view('user\seats');
});


Route::get('admin/home', function () {
    return view('admin.home');
})->name('post');


Route::resource('admin/movie', movieController::class);
Route::resource('admin/cast', CastController::class);
Route::resource('admin/theater',\App\Http\Controllers\TheaterController::class);
Route::group(['namaspace'=>'User'],function () {
    Route::get('/movie', [HomeController::class, 'index']);
});
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('cast_show',CastShowController::class);
Route::resource('movie_show',HomeController::class);
Route::resource('/home',MoviehomeController::class);
Route::resource('theater_show',\App\Http\Controllers\User\TheatershowController::class);
//Route::get('seats_show',SeatshowController::class);
Route::resource('seats_show',SeatshowController::class);
