<div class="modal fade bd-example-modal-lg" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-success" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">User Registration Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8">
                
                    <h4> Create New Account</h4>
                    <form method="POST" action="{{ route('register') }}">
                              @csrf
                       <div class="card-body p-8">
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
      </div>
   </div>
</div>