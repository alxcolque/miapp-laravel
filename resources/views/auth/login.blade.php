<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="{{asset('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{asset('public/admin/vendors/font-awesome/css/font-awesome.min.css')}}">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">{{ __('Login') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" placeholder="Email address" required="required" autofocus="autofocus" autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="inputEmail">{{ __('Dirección de E-Mail') }}</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required="required" autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="inputPassword">{{ __('Password') }}</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label class="form-check-label" for="remember">
                  <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('register') }}">{{ __('Registrar una cuenta') }}</a>
            @if (Route::has('password.request'))
              <a class="d-block small" href="{{ route('password.request') }}">
                {{ __('¿Has olvidado tu contaseña?') }}
              </a>
            @endif
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript Forgot Your Password?-->
    <script src="{{ asset('public/admin/vendors/jquery/jquery-3.3.1.min') }}"></script>
    <script src="{{ asset('public/admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('public/admin/vendors/jquery-easing/jquery.easing.min.js') }}"></script>

  </body>

</html>
