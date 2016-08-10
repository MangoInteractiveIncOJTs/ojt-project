<?php
include('login.php');

if(isset($_SESSION['login_user'])){
header("location: index2.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <label for="username" class="label">Username</label>
          <input id="username" name = "username" type="text" class="input">
        </div>
        <div class="group">
          <label for="password" class="label">Password</label>
          <input id="password" name= "password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" name="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </div>
      <div class="sign-up-htm">
        <div class="group">
          <label for="username" class="label">Username</label>
          <input id="username" name = "username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name= "password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Repeat Password</label>
          <input id="password" name= "password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Email Address</label>
          <input id="password" name= "password" type="text" class="input">
        </div>
        <div class="group">
          <input type="submit" name="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
				</div>
				<span><?php echo $error; ?></span>
			</div>
		</div>
	</div>
</div>
</html>