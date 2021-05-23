@extends('admin/layouts/app')

@section('headSection')
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Text Editors
                <small>Advanced form element</small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12" style="font-size: 15px">

                    <!-- /.box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="padding: 10px"></h3>
                        </div>

                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif
                        <form role="form" action="{{route('movie.update',$movie->id)}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" class="form-control" id="title" name="title" style="font-size: 15px;height: 35px" placeholder="Title"
                                           value="{{$movie->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="overview">Movie overview</label>
                                    <input type="text" class="form-control" id="overview" name="overview" placeholder="Sub Title" style="font-size: 15px;height: 35px"
                                           value="{{$movie->overview}}">
{{--                                    <textarea class="form-control" style="height:150px;width: 100px" name="overview" placeholder="overview">{{ $movie->overview }}</textarea>--}}
                                </div>

                                <div class="form-group">
                                    <label for="year">Release Year</label>
                                    <input type="text" class="form-control" id="release_year" name="release_year" placeholder="release year" style="font-size: 15px;height: 35px"
                                           value="{{$movie->release_year}}">
                                </div>

                                <div class="form-group">
                                    <label for="image">Movie Poster</label>
                                    <input type="file"  name="poster" id="poster" value="{{$movie->poster}}">
                                </div>


                                <div class="form-group">
                                    <label for="runtime">Runtime</label>
                                    <input type="text" class="form-control" id="runtime" name="runtime" placeholder="runtime"
                                           style="font-size: 15px;height: 35px"  value="{{$movie->runtime}}">
                                </div>
                                <div class="form-group">
                                    <label for="cast">Cast</label>
                                    <input type="text" class="form-control" id="cast" name="cast" placeholder="cast"
                                           style="font-size: 15px;height: 35px"  value="{{$movie->cast}}">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="font-size: 18px">Submit</button>
                                <a type="button" style="font-size: 18px" href="{{route('movie.index')}}" class="btn btn-warning">Back</a>
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
