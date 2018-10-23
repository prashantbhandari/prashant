{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        
                            <div class="col-md-6">

                               
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
@endsection

<div class="form-group row">
    <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Select City') }}</label>
    <select class="form-control" name="city" required>
      <option selected hidden>--Select City--</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </div> --}}


  @extends("auth.common.index")
  @section("body")
  
  <body class="hold-transition register-page">
  <div class="register-box">
      <div class="register-logo">
      <a><b>Admin</b>Register</a>
      </div>
  
                  <div class="card">
  
                      <div class="card-body register-card-body">
                          <div class="login-box-msg">{{ __('Register') }}</div>                            
                          <form method="POST" action="{{ route('register') }}">
                              @csrf
  
  
                                  <div class="form-group has-feedback">
                                      <input id="name" type="text" placeholder="Full name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
  
                                      @if ($errors->has('name'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                      <span class="fa fa-user form-control-feedback"></span>
                                      
                                  </div>
  
  
                                  <div class="form-group has-feedback">
                                      <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
  
                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                      <span class="fa fa-envelope form-control-feedback"></span>
                                      
                                  </div>
  
  
                                  <div class="form-group has-feedback">
                                      <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
  
                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                      <span class="fa fa-lock form-control-feedback"></span>                                    
                                  </div>
  
  
                                  <div class="form-group has-feedback">
                                      <input id="password-confirm" type="password" placeholder="Retype Password" class="form-control" name="password_confirmation" required>
                                      <span class="fa fa-lock form-control-feedback"></span>                                    
                                  </div>

                                  <div class="form-group row">
                                    <select class="form-control" name="city_id" id="city_id" required>
                                        <option value="" selected hidden>--Select City--</option>
                                            @foreach(App\City::all() as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                    </select>
                                    <span class="fa fa-map-marker form-control-feedback"></span>                                    
                                  </div>
  
                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Register') }}
                                      </button>
                                  </div>
                                  <a class="btn btn-link" href="/superadmin/admins">
                                          Back to Admin Management
                                      </a>
                              </div>
                          </form>
                      </div>
                  </div>
  </div>
  
  @endsection