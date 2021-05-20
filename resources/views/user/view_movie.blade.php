@extends('user/app')

@section('bg-img',asset('user/img/movie.jpg'))
@section('sub-heading','Millions of movies to discover. Explore now.')
@section('title','Welcome')


@section('main-content')
    <div class="container">
        <div class="row">
        @foreach($movies as $movie)
            <div class="col-4">
                <div class="card" style="width: 20rem; height: 500px">
                    <h4 class="card-title" style="text-align: center;font-family: 'Times New Roman';padding-top: 15px">{{$movie->title}}</h4>
                    <hr>
                    <a href=""> <img src="{{$movie->poster}}" class="card-img-top" alt="..." height="320px" width="250px"></a>
                        <p class="card-text" style="padding: 5px">Released Year: {{$movie->release_year}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <hr>
@endsection
