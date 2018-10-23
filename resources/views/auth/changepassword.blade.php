@extends('auth.common.index')

@section('body')
<body class="hold-transition login-page">
<div class="login-box">
      <div class="login-logo">
          @if($guard == "admin")
        <b>Admin</b>Change Password
        @elseif($guard == "superadmin")
        <b>SuperAdmin</b>Change Password
        @endif
    </div>
  <!-- /.login-logo -->
  <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg"><b>{{ Auth::user()->name }}</b> change your Password</p>

                    <div class="panel-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        <form class="form-horizontal" method="POST" @if($guard == "admin")action="{{ route('admin.changepassword') }}"@elseif($guard == "superadmin")action="{{ route('superadmin.changepassword') }}"@endif)>
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }} has-feedback">
                                    <input id="current-password" type="password" placeholder="Current Password" class="form-control" name="current-password" required>

                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('current-password') }}</strong>
                                        </span>
                                    @endif
                                    <span class="fa fa-lock form-control-feedback"></span>                                                                  
                            </div>

                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }} has-feedback">

                                    <input id="new-password" type="password" placeholder="New Password" class="form-control" name="new-password" required>

                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                    @endif
                                    <span class="fa fa-lock form-control-feedback"></span>                                                                  
                                    
                            </div>

                            <div class="form-group has-feedback">

                                    <input id="new-password-confirm" placeholder="Confirm New Password" type="password" class="form-control" name="new-password_confirmation" required>
                                    <span class="fa fa-lock form-control-feedback"></span>                                                                  
                                    
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.login-card-body -->
              </div>
            </div>
            <!-- /.login-box -->
@endsection
