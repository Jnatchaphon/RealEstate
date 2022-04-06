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
                    <li class="breadcrumb-item active">Edit Next Match</li>
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
                <h3 class="card-title">Edit Next Match</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('Nextmatch.update', $nm->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">League</label>
                                    </div>
                                    <input type="league" class="form-control" name="league" value="{{ $nm->league }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">Score</label>
                                    </div>
                                    <input type="score" class="form-control" name="score" value="{{ $nm->scores }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">Home</label>
                                    </div>
                                    <input type="homenm" class="form-control" name="homenm" value="{{ $nm->nm_home }}">
                                </div>
                            </div>
                            <div class="form-group">
                                @if($nm->m_home != 'no_pic.png')
                                <div class="d-flex align-items-end">
                                    <a href="{{ url('img/upload/'.$nm->m_home) }}" data-lity><img
                                            src="{{ url('img/upload/'.$nm->m_home) }}" width="100"></a>
                                    <a href="{{ route('Nextmatch.show', $nm->id, 1) }}" class="col-1 text-danger"
                                        onclick="javascript:return confirm('Confirm Delete');"><i
                                            class="fas fa-trash"></i></a>
                                </div>
                                @else
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroupFileAddon01">Upload Image</label>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="imagehome" id="imagehome">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">Away</label>
                                    </div>
                                    <input type="awaynm" class="form-control" name="awaynm" value="{{ $nm->nm_away }}">
                                </div>
                            </div>
                            <div class="form-group">
                                @if($nm->m_away != 'no_pic.png')
                                <div class="d-flex align-items-end">
                                    <a href="{{ url('img/upload/'.$nm->m_away) }}" data-lity><img
                                            src="{{ url('img/upload/'.$nm->m_away) }}" width="100"></a>
                                    <a href="{{ route('Nextmatch.show', $nm->id, 2) }}" class="col-1 text-danger"
                                        onclick="javascript:return confirm('Confirm Delete');"><i
                                            class="fas fa-trash"></i></a>
                                </div>
                                @else
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroupFileAddon01">Upload Image</label>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="imageaway" id="imageaway">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mt-4">
                            <textarea name="des" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $nm->des }}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Edit News</button>
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
