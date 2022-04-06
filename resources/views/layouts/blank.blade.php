<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>THAIGUNNERS</title>

        <!-- Scripts -->
        @include('Admin.stylesheet')

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
             @yield('content')
        </div>


</html>

@include('Admin.script')

@if (session()->has('status'))
<script>
    swal({
        title: "<?= session()->get('status'); ?>",
        timer: 1500,
        type: 'success',
        showConfirmButton: false}, function () {
        window.location.href = "<?= session()->get('link'); ?>";
    });
</script>
@endif




