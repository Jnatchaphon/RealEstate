@extends('Admin.app')



@section('stylesheet')
@include('Admin.stylesheet')
@endsection


@section('menuadmin')
@include('Admin.menu')
@endsection



@section('contentadmin')


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/Admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <!-- Profile Image -->
               @include('Admin.profile')
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <!-- About Me Box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">About Us</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Company</strong>

                        <p class="text-muted">
                            THAIGUNNERS
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8985.48794924661!2d99.0573017919186!3d18.756560658178707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x700583102856058a!2sProspeed%20Office%20Chiang%20Mai!5e0!3m2!1sth!2sth!4v1570595577141!5m2!1sth!2sth"  height="350" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>



@endsection



@section('footer')
@include('Admin.footer')
@endsection


@section('script')
@include('Admin.script')
@endsection
