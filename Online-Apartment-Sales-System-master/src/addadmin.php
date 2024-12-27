<?php

require "configAdminparts.php";

$Name = $_POST["adpname"];
$Contact = $_POST["adpcontact"];
$Email = $_POST["adpemail"];
$Password = $_POST["adppass"];

$sql = "INSERT INTO Admin(Name, Contact, Email, Password)VALUES('$Name', '$Contact', '$Email', '$Password')";
	if($con->query($sql))
	{
		echo"Inserted Succesfully";
	}
	else
	{
		echo"Error:".$con->error;
	}
	

?>