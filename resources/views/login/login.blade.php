<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Login Form a Responsive Widget Template :: w3layouts</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<base href="{{ asset('') }}">
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="{{ asset('') }}css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1>Đăng Nhập Quản Trị Viên</h1>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <form method="POST">
			@csrf
            <div class=" w3l-form-group">
                <label>Username</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username" />
                </div>
                        @if (session('thongbao'))
                            <script>
                                alert('{{ session('thongbao') }}')
                            </script>
                        @endif


                        @if ($errors->has('name'))
                                <script>
                                    alert('{{ $errors->first('name') }}')
                                </script>
                        @endif



                        @if ($errors->has('password'))
                                <script>
                                    alert('{{ $errors->first('password') }}')
                                </script>
                         @endif
               
            </div>
            <div class=" w3l-form-group">
                <label>Password</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password"/>
                    
                </div>
            </div>
            <div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>
            <button type="submit">Login</button>
        </form>
        <p class=" w3l-register-p">Don't have an account?<a href="#" class="register"> Register</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> © 2019 Copy right Talent Wins Technology</p>
    </footer>

</body>

</html>
























<!--



	
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
{{--  <!DOCTYPE html>
<html>

<head>
<title> Master login Form Responsive Widget Template  :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Master  Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<base href="{{ asset('') }}">
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Cormorant+SC:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1>Master  Login Form</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form method="post">
					@csrf
						@if (session('thongbao'))  --}}
						 {{-- <div class="alert alert-danger" role="alert">
							 <strong>{{ session('thongbao') }}</strong>
						 </div> --}}
								{{--  <script>
									alert('{{ session('thongbao') }}');
								</script>
						@endif
					<input type="text" name="name" placeholder="User Name  or  email..." value="{{ old('name') }}" />
						@if ($errors->has('name'))
							<script>
								alert('{{ $errors->first('name') }}');
							</script>
						@endif
					<input type="password"  name="password" class="padding" placeholder="Password"/>
						@if ($errors->has('password'))
							<script>
									alert('{{ $errors->first('password') }}');
							</script>
						@endif  --}}
					{{-- <button type="submit">Login</button> --}}
					{{--  <input type="submit" value="login">
				</form>
			</div>
		  <div class="clear"> </div>
		</div>
		
		<div class="footer">
		<p>© 2019 Copy right Talent Wins Technology</p>
		</div>
	</div>
</body>
</html>  --}}