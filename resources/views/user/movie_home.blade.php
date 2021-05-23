@extends('user/app')

@section('bg-img',asset('user/img/movie.jpg'))
@section('sub-heading','Millions of movies to discover. Explore now.')
@section('title','Movies')


@section('main-content')
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-4">
                    <div class="card" style="padding: 10px">
                        <h4 class="card-title" style="text-align: center;font-family: 'Times New Roman';padding-top: 10px">{{$movie->title}}</h4>
                        <a href="{{ route('movie.show',$movie->id) }}"> <img src="{{$movie->poster}}" class="w-75 p-3" style="margin-left: 35px"></a>
                        <p class="card-text">Released Year: {{ $movie->release_year}}</p>
                        <a class="btn btn-info" href="{{ route('movie.show',$movie->id) }}" style="font-size: 15px;padding: 5px;border-radius: 5px">More..</a>
                    </div>
                </div>
            @endforeach
            <br>
        </div>
    </div>
        <hr>
@endsection
