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
                    <li class="breadcrumb-item active">League Table</li>
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
                <h3 class="card-title">League Table</h3>
            </div>
            <div class="col-sm p-0 "><img src="{{ url('img/bg-detail.jpg') }}" class="img-fluid" width="100%"></div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('Leaguetable.update', 1) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">Position</label>
                                    </div>
                                    <input type="pos" class="form-control" name="pos" value="{{ $l->pos }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">Play</label>
                                    </div>
                                    <input type="play" class="form-control" name="play" value="{{ $l->play }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">Win</label>
                                    </div>
                                    <input type="win" class="form-control" name="win" value="{{ $l->win }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">Draw</label>
                                    </div>
                                    <input type="draw" class="form-control" name="draw" value="{{ $l->draw }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">Lost</label>
                                    </div>
                                    <input type="lost" class="form-control" name="lost" value="{{ $l->lost }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">GF</label>
                                    </div>
                                    <input type="gf" class="form-control" name="gf" value="{{ $l->gf }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">GA</label>
                                    </div>
                                    <input type="ga" class="form-control" name="ga" value="{{ $l->ga }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">GD</label>
                                    </div>
                                    <input type="gd" class="form-control" name="gd" value="{{ $l->gd }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" id="inputGroup-sizing-default">PTS</label>
                                    </div>
                                    <input type="pts" class="form-control" name="pts" value="{{ $l->pts }}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Edit League Table</button>
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
