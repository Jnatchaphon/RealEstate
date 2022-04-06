@extends('layouts.blank')


@section('content')
<div class="login-logo">
    <b>Administrator</b>
</div>
<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Forgotten Password</p>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            <div class="input-group mb-3">
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</div>

@endsection













