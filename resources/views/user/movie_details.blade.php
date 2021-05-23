@extends('user/app')

@section('bg-img',asset('user/img/movie.jpg'))
@section('sub-heading','')
@section('title','Movies Details')

@section('main-content')
    <a href="/home" class="btn btn-primary" style="float: right;margin-right: 100px;border-radius: 5px;padding: 12px">Back</a>
        <div class="movie-info border-b border-gray-800 bg-gray-400 mt-10">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{$movie ->poster}}" alt="poster" class="w-25 lg:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $movie->title }}</h2>
                <div class="flex flex-wrap items-center text-black text-sm mt-5">

                    <span>{{ $movie->release_year }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie->runtime }}</span>
                </div>

                <p class="text-gray-800 mt-8">
                    {{ $movie->overview }}
                </p>

                <div class="mt-5">
                    <h4 class="text-black font-semibold">Cast Member</h4>
                    <div class="flex mt-2">

                        <div class="mr-8">
                            <div>{{ $movie->cast }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <a href ="{{route('theater_show.index')}}" class="btn btn-info" style="font-size: 16px;margin-top: 15px;border-radius: 10px"> Booking</a>
        </div>
    </div>
@endsection
