<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Login</title>
    <!-- Icons-->
    <!--<link href="/coreui/src/css/coreui-icons.min.css" rel="stylesheet">-->
   
    <link href="{{ url('assets/css/coreui-icons.min.css') }}" rel="stylesheet">
    <!--<link href="/coreui/src/css/flag-icon.min.css" rel="stylesheet">-->
    <link href="{{ url('assets/css/flag-icon.min.css') }}" rel="stylesheet">
    <!--<link href="/coreui/src/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="{{ url('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--<link href="/coreui/src/css/simple-line-icons.css" rel="stylesheet">-->
    <link href="{{ url('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ ('assets/vendor/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    
</head>
<body class="@yield('bodyclassname')">
<div class="container" style="margin-top: 20%">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>{{ __('Login') }}</h1>
                <p class="text-muted">Sign In to your account</p>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  
                  <div class="col-md-10">
                                <input id="username" type="text" placeholder="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                  </div>
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <div class="col-md-10">
                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                </div>
                <div class="row">
                  <div class="form-group row mb-10">
                        <div class="col-md-12 offset-md-1">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                   </div>
                </div>
                </form>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button class="btn btn-primary active mt-3" type="button"><a style="color:#fff;" href="{{ route('register') }}">Register Now!</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>
