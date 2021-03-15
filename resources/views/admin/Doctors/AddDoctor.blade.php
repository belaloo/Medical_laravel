@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <form method="post"  enctype="multipart/form-data">
        {{csrf_field()}}
        @if(session('message'))
            <div class="alert alert-success alert-dismissible text-left">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-alert"></i> Success </h5>
                Create New Doctor Done 😁
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible text-left">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i>Stop </h5>
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-left"> Basics Information</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body  text-left">

                        <div class="form-group">
                            <label for="inputName"> Doctor Full Name </label>
                            <input type="text" name="name" id="inputName" class="form-control text-left" required>
                        </div>

                        <div class="form-group">
                            <label for="inputName"> Email  </label>
                            <input type="text" name="email" id="inputName" class="form-control text-left" required>
                        </div>

                        <div class="form-group">
                            <label for="inputName"> Password  </label>
                            <input type="password" name="password" id="inputName" class="form-control text-left" required>
                        </div>
                        <div class="form-group">
                            <label for="inputName"> Password  </label>
                            <input type="tel" name="mobile" id="inputName" class="form-control text-left" required>
                        </div>

                        <div class="form-group">
                            <label for="example">The Major for This Doctor is :</label>
                            <select class="form-control custom-select" id="example" name="major_id" required>
                                <option  disabled>please Chooses  </option>
                                @foreach($majors as $major)
                                    <option value="{{$major->id}}">{{$major->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Personal Pic</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="TheLogo" class="custom-file-input" id="exampleInputFile" accept="image/*" required>
                                    <label class="custom-file-label text-left" for="exampleInputFile" >Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text text-left" id="">Upload</span>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <a href="" class="btn btn-secondary float-right">Cancel</a>
                <input type="submit" value="Save" class="btn btn-success float-left">
            </div>
        </div>
    </form>
@stop
@section('js')
    <script>
        $(function() {$('#example').select2();});
    </script>
@stop

