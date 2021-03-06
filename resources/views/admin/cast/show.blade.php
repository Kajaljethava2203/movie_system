@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">

    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

@endsection
@section('main-content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item" style="font-size: 25px"><a href="#">Cast Details</a></li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
{{--                    <h3 class="card-title">Cast</h3>--}}


                    <div class="text-center">
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('cast.create')}}" style="font-size: 15px;border-radius: 10px"> Add New Cast</a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: 15px">
                                    <th>Sr. No</th>
                                    <th>Name</th>
                                    <th>Actor Image</th>
                                    <th>Bio</th>
                                    <th>Birth Date</th>
                                    <th>List of Movies</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($casts as $cast)
                                    <tr>
                                        <td style="font-size: 14px">{{$loop->index +1}}</td>
                                        <td style="font-size: 14px">{{$cast->name}}</td>
                                        <td> <img src="{{$cast ->image}}" alt="image" width="150px" height="200px"></td>
                                        <td style="font-size: 14px">{{$cast->bio}}</td>
                                        <td style="font-size: 14px">{{$cast->birth_date}}</td>
                                        <td style="font-size: 14px">{{$cast->list_of_movies}}</td>
                                        <td><a href ="{{route('cast.edit',$cast->id)}}" class="btn btn-primary" style="font-size: 16px"> Edit</td>
                                        {{--                                            <td><a href="{{route('movies.edit',$film->id)}}"> Update--}}
                                        {{--                                                    <i class="far fa-edit"></i></a></td>--}}



                                        <td>
                                            <form id="delete-form-{{$cast->id}}"
                                                  method="post"
                                                  action="{{route('cast.destroy',$cast->id)}}"
                                                  style="display: none">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                            </form>
                                            <a href="" class="btn btn-danger" style="font-size: 16px"  onclick="if(confirm('ARE YOU SURE ,YOU WANT TO DELETE THIS?'))
                                                {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{$cast->id}}').submit();
                                                }else
                                                {
                                                event.preventDefault();
                                                }" > Delete</a>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
