<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS-->
        <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="{{asset('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{asset('public/admin/vendors/font-awesome/css/font-awesome.min.css')}}">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">{{ __('Registrar Cuenta') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="First name" required="required" autofocus="autofocus">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="name">{{ __('Nombre') }}</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastname" class="form-control  @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname" placeholder="Last name" required="required" autofocus="autofocus">
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="lastname">{{ __('Apellido') }}</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email address" required="required">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="email">{{ __('Dirección E-Mail') }}</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password" required="required">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="password-confirm" class="form-control" placeholder="Confirm password" name="password_confirmation" autocomplete="new-password" required="required">
                    <label for="password-confirm">{{ __('Confirmar Password') }}</label>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">{{ __('Registrar') }}</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="{{ route('login') }}">{{ __('Página de Login') }}</a>
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
