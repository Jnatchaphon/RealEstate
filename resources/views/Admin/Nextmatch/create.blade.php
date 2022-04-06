@extends('Admin.app')



@section('stylesheet')
@include('Admin.stylesheet')
@endsection


@section('menuadmin')
@include('Admin.menu')
@endsection



@section('contentadmin')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/Admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Add Next Match</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="card">

    <!-- /.card-header -->
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Next Match</h3>
            </div>
            <!-- /.card-header -->
            @if (count($errors) > 0)
            <div class="alert alert-secondary" role="alert">
                <ul class="nav">
                    @foreach ($errors->all() as $error)
                    <li class="nav-item text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- form start -->
            <form method="post" action="{{ route('Nextmatch.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">League</label>
                                    </div>
                                    <input type="league" class="form-control" name="league" placeholder="Enter League Name">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">Score</label>
                                    </div>
                                    <input type="score" class="form-control" name="score" placeholder="Enter Score">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text"
                                            id="inputGroup-sizing-default">Home</label>
                                    </div>
                                    <input type="homenm" class="form-control" name="homenm" placeholder="Enter Team">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroupFileAddon01">Upload Image</label>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="imagehome" id="imagehome">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text"
                                            id="inputGroup-sizing-default">Away</label>
                                    </div>
                                    <input type="awaynm" class="form-control" name="awaynm" placeholder="Enter Team">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroupFileAddon01">Upload Image</label>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="imageaway" id="imageaway">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mt-4">
                            <textarea name="des" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Add Next Match</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card-body -->
</div>

@endsection



@section('footer')
@include('Admin.footer')
@endsection


@section('script')
@include('Admin.script')

@endsection
