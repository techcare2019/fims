<div class="modal fade bd-example-modal-lg" id="addDivisionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Division Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="container">
       <div class="row justify-content-center">
        <div class="col-md-8">

              <h4> Create New Division</h4>
              <form class="division-form" id="division-form" method="POST" enctype="multipart/form-data">
                        @csrf
             <div class="card-body p-8">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <div class="col-md-10">
                    <input id="division_name" type="text" placeholder="division name" class="form-control{{ $errors->has('division_name') ? ' is-invalid' : '' }}" name="division_name" value="{{ old('division_name') }}" required autofocus>
                    @if ($errors->has('division_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('division_name') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <div class="col-md-10">
                    <input id="description" type="text" placeholder="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="col-md-12 offset-md-1">
                    <button class="btn  btn-success" type="submit">
                        {{ __('Register') }}
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
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