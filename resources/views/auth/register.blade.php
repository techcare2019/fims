<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Signup</title>
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
        <div class="col-md-6">
          <div class="card mx-4">
          
              <h1> Register</h1>
              <p class="text-muted"> Create your account</p>
              <form method="POST" action="{{ route('register') }}">
                        @csrf
             <div class="card-body p-4">
              <div class="input-group mb-3">
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
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                 <div class="col-md-10">
                      <input id="email" type="email" placeholder="email add" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                  </span>
                </div>
                 <div class="col-md-10">
                    <input id="password" type="password" placeholder="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
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
                    <input id="password-confirm" type="password" placeholder="confirm password" class="form-control" name="password_confirmation" required>
                </div>
              </div>
              <div class="col-md-10 offset-md-1">
                    <button class="btn btn-block btn-success" type="submit">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
 </body>
</html>
