@extends('user/app')

@section('bg-img',asset('user/img/movie.jpg'))
@section('sub-heading','Millions of movies to discover. Explore now.')
@section('title','Welcome')


@section('main-content')
    <div class="container">
        <div class="row">
            <h1 style="color: blue;font-size: 26px">Bollywood</h1>
            <h3 style="color: grey;font-weight: 600;font-size: 20px">
                Hindi cinema, often known as Bollywood and formerly as Bombay cinema, is the Indian Hindi-language film industry based in Mumbai (formerly Bombay). The term is a portmanteau of "Bombay" and "Hollywood".
            </h3>
            <a href="{{ url('view_movies') }}" class="uppercase bg-transparent border-2 border-gray-100 text-white hover:text-red-500 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <hr>
@endsection
