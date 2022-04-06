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
                    <li class="breadcrumb-item active">Add News</li>
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
                <h3 class="card-title">Add News</h3>
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
            <form method="post" action="{{ route('News.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Types</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="types">
                            <option selected>Choose...</option>
                            <option value="1">News</option>
                            <option value="2">Article</option>
                            <option value="3">Match Preview</option>
                            <option value="4">Funny</option>
                            <option value="5">Match Result</option>
                            <option value="6">Official</option>
                            <option value="7">Team of the Weeks</option>
                            <option value="8">Transfer Talk</option>
                            <option value="9">Highlight</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" id="inputGroup-sizing-default">Topic</label>
                            </div>
                            <input type="name" class="form-control" name="name" placeholder="Enter Topic Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" id="inputGroup-sizing-default">Description</label>
                            </div>
                            <input type="des" class="form-control" name="des" placeholder="Enter Description">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" id="inputGroupFileAddon01">Upload Image</label>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <textarea name="detail" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Add News</button>
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
