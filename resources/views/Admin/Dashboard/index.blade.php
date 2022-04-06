@extends('Admin.app')


@section('stylesheet')
@include('Admin.stylesheet')
@endsection

@section('menuadmin')
@include('Admin.menu')
@endsection



@section('contentadmin')



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-body text-center font-weight-bold text-gray">
                     <h1 class="text-primary">THAIGUNNERS</h1><br>
                     <h3>Welcome to Administrator</h3>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection



@section('footer')
@include('Admin.footer')
@endsection


@section('script')
@include('Admin.script')
@endsection
