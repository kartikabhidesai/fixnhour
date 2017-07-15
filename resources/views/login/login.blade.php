<?php
// echo URL::previous();
 Session::set('backUrl', URL::previous());
// echo "<br/>".Session::get('backUrl');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GALAXY360 | Log in</title>
 
  
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">
 @include('login.layout.include.css')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="">FIXNHOURS</a>
  </div>
     @include('login.partials.message')
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
 @if(empty($loginType)) 
    <form action="{{ route('user_login') }}" method="post">
       @else
        <form action="{{ route('admin_login') }}" method="post">
        @endif
           
           
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email / User ID" name="email" value="{{ old('email')}}">
        <span class="ion ion-android-mail form-control-feedback" style="font-size: 20px;line-height: 34px;color: #00c0ef !important;"></span>
      </div>
      @if ($errors->has('email'))
        <div class="error">{{ $errors->first('email') }}</div>
      @endif  
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="ion ion-android-unlock form-control-feedback" style="font-size: 20px;line-height: 34px;color: #00c0ef !important;"></span>
      </div>
       @if ($errors->has('password'))
            <div class="error">{{ $errors->first('password') }}</div>
       @endif
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-info btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@include('login.layout.include.js');
@section('footerJS')

<!-- iCheck -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
