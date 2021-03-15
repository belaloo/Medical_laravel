@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

        <div class="content-header">
            <div class="container-fluid">

                <h1 class="text-center"> Doctor Work Time </h1>
            </div>
        </div>

@stop


@section('content')
            <div class="container-fluid">



                <form method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-danger">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" name="dateName" class="form-control" value="Saturday" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time"  name="FromTime" class="form-control" placeholder="Start Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time"  name="ToTime" class="form-control" placeholder="End Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <select class="form-control custom-select" id="example" name="clinic_id" required="">
                                                @foreach($clinics as $cli)
                                                    <option value="{{ $cli->id }}">{{ $cli->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Save" class="btn btn-success float-left">

                          {{--                            <input type="submit" name="delete" value="Delete" class="btn btn-danger float-right">--}}
                        </div>
                        <br>
                    </div>
                </form>

                <form method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-danger">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" name="dateName" class="form-control" value="Sunday" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time" name="FromTime" class="form-control" placeholder="Start Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time" name="ToTime" class="form-control" placeholder="End Time" required="">
                                        </div>

                                        <div class="col-3">
                                            <select class="form-control custom-select" id="example" name="clinic_id" required="">
                                              @foreach($clinics as $cli)
                                                  <option value="{{ $cli->id }}">{{ $cli->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Save" class="btn btn-success float-left">

                        </div>
                        <br>
                    </div>
                </form>

                <form method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-danger">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" name="dateName" class="form-control" value="Monday" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time"  name="FromTime" class="form-control" placeholder="Start Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time"  name="ToTime" class="form-control" placeholder="End Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <select class="form-control custom-select" id="example" name="clinic_id" required="">
                                              @foreach($clinics as $cli)
                                                  <option value="{{ $cli->id }}">{{ $cli->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Save" class="btn btn-success float-left">

                           {{--                            <input type="submit" name="delete" value="Delete" class="btn btn-danger float-right">--}}
                        </div>
                    </div>
                    <br>
                </form>

                <form method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-danger">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" name="dateName" class="form-control" value="Thursday" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time" name="FromTime" class="form-control" placeholder="Start Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time" name="ToTime" class="form-control" placeholder="End Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <select class="form-control custom-select" id="example" name="clinic_id" required="">
                                               @foreach($clinics as $cli)
                                                   <option value="{{ $cli->id }}">{{ $cli->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Save" class="btn btn-success float-left">

                        </div>
                        <br>
                    </div>
                </form>

                <form method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-danger">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" name="dateName" class="form-control" value="Wednesday" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time"  name="FromTime" class="form-control" placeholder="Start Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time" name="ToTime" class="form-control" placeholder="End Time" required="">
                                        </div>

                                        <div class="col-3">
                                            <select class="form-control custom-select" id="example" name="clinic_id" required="">
                                               @foreach($clinics as $cli)
                                                   <option value="{{ $cli->id }}">{{ $cli->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Save" class="btn btn-success float-left">

                           {{--                            <input type="submit" name="delete" value="Delete" class="btn btn-danger float-right">--}}
                        </div>
                        <br>
                    </div>
                </form>

                <form method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-danger">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" name="dateName" class="form-control" value="Thursday" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time" name="FromTime" class="form-control" placeholder="Start Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time" name="ToTime" class="form-control" placeholder="End Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <select class="form-control custom-select" id="example" name="clinic_id" required="">
                                               @foreach($clinics as $cli)
                                                   <option value="{{ $cli->id }}">{{ $cli->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Save" class="btn btn-success float-left">

                        </div>
                        <br>
                    </div>
                </form>

                <form method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-danger">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" name="dateName" class="form-control" value="Friday" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time" name="FromTime" class="form-control" placeholder="Start Time" required="">
                                        </div>
                                        <div class="col-3">
                                            <input type="time" name="ToTime" class="form-control" placeholder="End Time" required="">
                                        </div>

                                        <div class="col-3">
                                            <select class="form-control custom-select" id="example" name="clinic_id" required="">
                                               @foreach($clinics as $cli)
                                                   <option value="{{ $cli->id }}">{{ $cli->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Save" class="btn btn-success float-left">

                        </div>
                        <br>
                    </div>
                </form>

            </div>
            <div style="margin-top: 20px;">
        </div>


@stop
