<?php 
 
	if (isset($_POST["submit"])) {
		if (isset($_POST["uid"])&& !empty($_POST["uid"])){
	$username = $_POST["uid"]; 
	$password = $_POST["password"];
			echo $username;
		}
	}
		code...
	echo $username . $password ; echo "<br>";
	echo "{$username}:{$password}";
 


  ?>
<!DOCTYPE html>

<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="practice.css">
	
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="login.css">
	<!-- <link rel="stylesheet" href="secondlogin.php"> -->
</head>
<body>
	
	<h1>SIGN IN</h1>
	<form action="practipost.php" method="POST">

		<input type="text" placeholder="username/email" name="uid" required>
		<input type="password" placeholder="Password here" name="password" required>
		<a href="secondlogin.php">sign up</a>
		<button class="btn-primary" name="submit">submit</button>
		 
		

	</form>