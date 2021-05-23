@extends('user/app')

@section('bg-img',asset('user/img/movie.jpg'))
@section('sub-heading','Millions of movies to discover. Explore now.')
@section('title','Theaters')


@section('main-content')
    <a href="/home" class="btn btn-primary" style="float: right;margin-right: 100px;border-radius: 5px;padding: 12px">Back</a>
    <div class="container">
        <div class="row">
            @foreach($theaters as $theater)
                <div class="col-4">
                    <div class="card" style="padding: 10px">
                        <h4 class="card-title" style="text-align: center;font-family: 'Times New Roman';padding-top: 10px">{{$theater->theatre_name}}</h4>
                        <p class="card-text" style="text-align: center;">City : {{ $theater->city_name}}</p>
                        <p class="card-text" style="text-align: center">Ratting : {{ $theater->ratting}}</p>
                        <form action="" method="GET">
                            <a class="btn btn-primary mt-5" href="" style="border-radius: 10px;margin-left: 110px" >Seats</a>
                        </form>
                    </div>
                </div>
            @endforeach
            <br>
        </div>
    </div>
    <hr>
@endsection
