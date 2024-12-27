<?php
	session_start();
	include ("configAdminparts.php");
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$Email = $_POST['email'];
		$Password = $_POST['pass'];
		
		$query = "SELECT * FROM admin WHERE Email='$Email' && Password='$Password'";
		$result = mysqli_query($conn, $query);
	
			if(mysqli_num_rows($result) > 0)
			{
				$adminlogin = mysqli_fetch_array($result);
				header("location:adminpmain.html");
				die;
			}
			
	}
	
	mysqli_close($conn);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="Styles/stylesadminlogin.css">
	<link rel="stylesheet" href="Styles/stylesmain.css">
</head>
<body class="lgbody">

	<center>
	<form class="lgform" method="POST">
		
		<br>
		<img class="lgheadimage" src="Images/logo.png">
		
		<br>
		<p class="lgtitle"> Email:</p> 
		<input class="lgbar" type="text" name="email" placeholder="Enter you Email" required> <br>
		
		<br>
		<p class="lgtitle"> Password:</p> 
		<input class="lgbar" type="password" name="pass" placeholder="Enter you Password" required> <br>
		
		<br>
		<input class="lgbtn" style="font-size:24px; color:#ffffff" type="submit" value="Log in"> <br>
		
	</form>
	</center>
	
	<footer>
		<p class="footpara">
		© 2023 CEYLON APARTMENTS PLC. ALL RIGHTS RESERVED. <br>
		SOLUTION BY <a class="footlink" href="#">APC SS</a> <br>
		</p>
	</footer>
	
</body>
</html>