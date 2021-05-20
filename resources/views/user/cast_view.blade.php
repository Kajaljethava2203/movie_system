@extends('user/app')

@section('bg-img',asset('user/img/movie.jpg'))
{{--@section('sub-heading','keep learning keep going')--}}
@section('title','Cast')

@section('main-content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            @foreach($casts as $cast)
                <div class="col-12">
                    <div class="movie-title" style="border: solid 1px gray;padding: 10px;border-radius: 10px">
                        <a href="#">
                            <h3 class="movie-title" style="">
                                {{ $cast->name }}
                            </h3>
                        </a>
                        <p>
                        <ul>
                            <li>{{ $cast->bio }}</li>
                        </ul>
                        </p>
                        <p style="font-size: 18px;">Birth Date: {{ $cast->birth_date }}</p>
                        <p style="font-size: 18px"> List of movies: {{ $cast->list_of_movies }}</p>

                        <p class="post-meta" style="font-size: 12px">
                            {{ $cast->created_at->diffForHumans() }}
                        </p>
                    </div>

                </div>
            @endforeach
        </div>
        <hr>
@endsection
