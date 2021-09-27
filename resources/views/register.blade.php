<!DOCTYPE html>
<html lang="en">
<head>
	<title>REGISTER</title>
	<link href="{{ asset('images/logo.png') }}" rel="icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrapp.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utill.css">
	<link rel="stylesheet" type="text/css" href="css/mainn.css">
  <link rel="stylesheet" type="text/css" href="css/asri.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/sekolah.jpg');">
			<div class="login100">
					<span class="login100-form-title p-b-34 p-t-27">
          Register Now
					</span>

   <div class="container">
      <form class="form-login" method="post" action="{{ route('add') }}">
        <div class="login-wrap">
                    <input class="form-control" autocomplete="off" id="name" name="name" placeholder="nama" value="{{ old('name') }}" type="text" minlength="2" autofocus required/>
                    <br>
                    <input class="form-control" autocomplete="off" id="username" name="username" placeholder="username" value="{{ old('username') }}" type="text" minlength="1" maxlength="12" required/>
                    <br>
                    <input class="form-control" id="password" name="password" placeholder="password" type="password" minlength="6" required/>
                    <br>
                    <input class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm_password" type="password" required/>
                    <br>
                    <input class="form-control" autocomplete="off" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}" type="email" required/>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                          <select id="departement" name="departement" class="form-control" >
                              @foreach($depts as $dept)
                              <option value="{{  $dept->id }}" {{ old('departement') == $dept->id ? 'selected' : '' }}>{{ $dept->status }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col-md-6">
                          <select class="form-control" id="role" name="role">
                              @foreach($roles as $role)
                              <option value="{{  $role->id }}" {{ old('role') == $role->id ? 'selected' : '' }}>{{ $role->namaRule }}</option>
                              @endforeach
                          </select>
                      </div>
                    </div>
                    <br>
                    <div class="container-login100-form-btn">
          <button class="login100-form-btn" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          {{ csrf_field() }}
          @include('formerrors')
          </div>
        </form>
          <hr>
          <div class="registration text-center">
            Already Have account ?<br/>
            <a href="{{ route('signin') }}">
              login
              </a>
          </div>
        </div>
    </div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/bootstrapp.min.js"></script>
<!--===============================================================================================-->
	<script src="js/mainn.js"></script>

</body>
</html>