<?php

require "configAdminparts.php";

$Name = $_POST["adpEname"];
$Contact = $_POST["adpEcontact"];
$Email = $_POST["adpEemail"];
$Password = $_POST["adpEpass"];

$sql = "INSERT INTO System_Editor(Name, Contact, Email, Password)VALUES('$Name', '$Contact', '$Email', '$Password')";
	if($conn->query($sql))
	{
		echo"Inserted Succesfully";
		header("location:adminpmain.html");
	}
	else
	{
		echo"Error:".$conn->error;
	}
	
?>