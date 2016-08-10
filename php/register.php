
<!DOCTYPE HTML>
	<html>
	<head>
	<title>Sign-Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head> 
	<body id="body-color"> 
		<div class="register-form">
			<h1>Register</h1>
			<form action="" method="POST">
			<p><label>User Name : </label>
			<input id="username" type="text" name="username" placeholder="username" /></p>
			<p><label>E-Mail: </label>
			<input id="password" type="email" name="email"/></p>
			<p><label>Password : </label>
			<input id="password" type="password" name="password" placeholder="password" /></p>
			<a class="btn" href="index.php">Login</a>
			<input class="btn register" type="submit" name="submit" value="Register" />
			</form>
		</div>
		<?php
		$connection = Mysql_connect("localhost", "root" ,"");
		Mysql_select_db("company");

    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
       
       
        mysql_query("INSERT INTO `login` VALUES ('', '$username', '$password', '$email')")
        or die("sorry can't connect!").mysql_error();           
    }
?>
	</body>
	</html>