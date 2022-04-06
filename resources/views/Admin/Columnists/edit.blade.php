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
                    <li class="breadcrumb-item active">Edit Columnist</li>
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
                <h3 class="card-title">Edit Columnist</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('Columnists.update', $co->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" id="inputGroup-sizing-default">Topic</label>
                            </div>
                            <input type="name" class="form-control" name="name" value="{{ $co->nm }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" id="inputGroup-sizing-default">Description</label>
                            </div>
                            <input type="des" class="form-control" name="des" value="{{ $co->des }}">
                        </div>
                    </div>
                    <div class="form-group">
                        @if($co->pic != 'no_pic.png')
                        <div class="d-flex align-items-end">
                            <a href="{{ url('img/upload/'.$co->pic) }}" data-lity><img
                                    src="{{ url('img/upload/'.$co->pic) }}" width="100"></a>
                            <a href="{{ route('Columnists.show', $co->id) }}" class="col-1 text-danger"
                                onclick="javascript:return confirm('Confirm Delete');"><i class="fas fa-trash"></i></a>
                        </div>
                        @else
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" id="inputGroupFileAddon01">Upload Image</label>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <textarea name="detail" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $co->de }}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Edit Columnist</button>
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
