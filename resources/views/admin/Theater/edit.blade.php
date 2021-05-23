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
                Theater Editors
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12" style="font-size: 15px">

                    <!-- /.box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="font-size: 18px;padding: 5px">Theater</h3>
                        </div>

                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif
                        <form role="form" action="{{route('theater.update',$theater->id)}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Theater Name</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px" id="name" name="name" placeholder="Enter Theater Name"
                                           value="{{$theater->theatre_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="city">City Name</label>
                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px" id="city" name="city" placeholder="Enter City Name"
                                           value="{{$theater->city_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="year">Ratting</label>
                                    <input type="number" class="form-control" style="font-size: 15px;height: 35px" id="rate" name="rate" placeholder="Enter Ratting"
                                           value="{{$theater->ratting}}">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="font-size: 18px">Submit</button>
                                <a type="button"  href="{{route('theater.index')}}" style="font-size: 18px" class="btn btn-warning">Back</a>
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
