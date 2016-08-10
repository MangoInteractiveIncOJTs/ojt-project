<?php

session_start();
$error = "";

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])){
		$error = " The username or password is Empty";
	}
	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$connection = mysql_connect("localhost", "root" ,"");

		$username = stripslashes($username);
		$password = stripcslashes($password);
		$username = mysql_escape_string($username);
		$password = mysql_escape_string($password);

		$db = mysql_select_db("company", $connection);
		$query = mysql_query("SELECT id from login where password='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
		$_SESSION['login_user']=$username;
		header("location: index2.php");
		} else {
		$error = "Username or Password is invalid";
		}
		mysql_close($connection);
		}
		}
?> 