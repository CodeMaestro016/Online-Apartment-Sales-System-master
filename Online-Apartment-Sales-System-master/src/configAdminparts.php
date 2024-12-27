<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oass";

$con=new mysqli($servername, $username, $password, $dbname);

	if($con->connect_error)
	{
		die("Connection faild: ".$con->connection_error);
	}
	
?>