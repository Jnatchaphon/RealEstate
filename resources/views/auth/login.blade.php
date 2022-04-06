@extends('layouts.blank')


@section('content')
<div class="login-logo">
    <b>Administrator</b>
</div>
<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Administrator Login</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
               
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                 @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            
            <div class="input-group mb-3">
                 <input id="password" type="password" class="form-control" name="password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                               <label  for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot My Password?') }}
            </a>
            @endif
        </p>
    </div>
    <!-- /.login-card-body -->
</div>

@endsection




