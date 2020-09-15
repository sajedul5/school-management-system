
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Include the above in your HEAD tag ---------->

  <style media="screen">
        /* Coded with love by Mutiullah Samim */
      body,
      html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #00d441 !important;
      }
      .user_card {
        height: 400px;
        width: 350px;
        margin-top: auto;
        margin-bottom: auto;
        background: #4caf50;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;

      }
      .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: #607966;
        padding: 10px;
        text-align: center;
      }
      .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        border: 2px solid white;
      }
      .form_container {
        margin-top: 100px;
      }
      .login_btn {
        width: 100%;
        background: #607966 !important;
        color: white !important;
      }
      .login_btn:focus {
        box-shadow: none !important;
        outline: 0px !important;
      }
      .login_container {
        padding: 0 2rem;
      }
      .input-group-text {
        background: #607966 !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
      }
      .input_user,
      .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
      }
      .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #c0392b !important;
      }
  </style>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="{{asset('/img/admin.jpg')}}" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST" action="{{ route('login') }}">
						@csrf

						@if($errors->any())
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							@foreach($errors->all() as $error)
								<strong>{{$error}}</strong><br>
							@endforeach
						</div>
						@endif
						@if(Session::get('message'))
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>{{Session::get('message')}}</strong>
						</div>
						@endif
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
							</div>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit"  class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<!-- <a href="#">Forgot your password?</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
