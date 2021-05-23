@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="font-size: 24px">
                Create Movie
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12" style="font-size: 15px">

                    <!-- /.box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="padding: 10px;font-size: 18px">Movie</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                        <form role="form" action="{{route('movie.store')}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Movie Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Movie Title" style="font-size: 15px;height: 35px">
                                </div>

                                <div class="form-group">
                                    <label for="subtitle">Movie overview</label>
{{--                                    <textarea class="form-control" id="overview" placeholder="Enter Movie Overview" style="font-size: 15px;height: 70px"></textarea>--}}
                                    <input type="text" class="form-control" id="overview" name="overview" placeholder="Overview" style="font-size: 15px;height: 35px">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Release Year</label>
                                    <input type="number" class="form-control" id="year" name="release_year" placeholder="Release Year" style="font-size: 15px;height: 35px">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Runtime</label>
                                    <input type="text" class="form-control" id="runtime" name="runtime" placeholder="runtime" style="font-size: 15px;height: 35px">
                                </div>

                                <div class="form-group">
                                    <label for="image">Movie Poster</label>
                                    <input type="file"  name="poster" id="poster">
                                </div>


                                <div class="form-check">
{{--                                    <input type="checkbox" name="status"  value="1" class="form-check-input" id="exampleCheck1">Trending<br><br>--}}
{{--                                    <label class="form-check-label" for="exampleCheck1"></label>--}}
                                    Is Popular   <input type="checkbox" name="movie_popular" class="form-check-input"><br>
                                    Is Trending   <input type="checkbox" name="movie_popular" class="form-check-input">
                                </div>

                                <div class="form-group">
                                    <label for="cast">Movie casts</label>
                                    <input type="text" class="form-control" id="cast" name="cast" placeholder="cast" style="font-size: 15px;height: 35px">
                                </div>

                            </div>
                            <!-- /.card-body -->

                           <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="font-size: 18px">Submit</button>
                                <a type="button"  href="{{route('movie.index')}}" class="btn btn-warning" style="font-size: 18px">Back</a>
                            </div>
                        </form>
                    </div>


                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('footerSection')
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(document).ready(function (){
            $(".select2").select2();
        });

    </script>
@endsection
