<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <base href="{{ asset('') }}">
  <link rel="stylesheet" href="admins/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admins/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admins/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admins/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admins/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="admin/register"><b>Add Member</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form method="post">
      @csrf
      <div class="form-group has-feedback">
          <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
        @if ($errors->has('name'))
            <div class="alert alert-danger" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </div>
        @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
          <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
          <label>Retype Password</label>
          <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        {{--  @if ($errors->password_confirmation)
          <div class="alert alert-danger" role="alert">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </div>
        @endif  --}}

      <div class="form-group has-feedback">
          <label>Số điện thoại</label>
          <input type="text" class="form-control" name="phone" placeholder="Phone">
          <span class="glyphicon glyphicon glyphicon-phone-alt form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <label>Phân quyền</label>
            <select name="level" class="form-control">
                <option value="1">Admin</option>
                <option value="2">Editor</option>
                <option value="3">User</option>
            </select>
        </div>



        {{--  <div class="form-group has-feedback">
            <label>Trạng thái</label>
            <select name="state" class="form-control">
                <option value="1"></option>
                <option value="0"></option>
            </select>
        </div>  --}}
      {{--  <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="phone">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>  --}}

      {{--  <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>  --}}
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            {{-- <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label> --}}
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    {{--  <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>  --}}

    <a href="admin/list" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="admins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="admins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="admins/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
