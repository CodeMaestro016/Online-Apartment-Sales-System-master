<?php
	
	include('configAdminparts.php');
	$AdminID=$_GET['adminID'];
 
	$Name = $_POST['adpname'];
	$Contact = $_POST['adpcontact'];
	$Email = $_POST['adpemail'];
	$Password = $_POST['adppass'];
 
	mysqli_query($conn,"UPDATE `admin` SET Name='$Name', Contact='$Contact', Email='$Email', Password='$Password' WHERE `Admin_ID`='$AdminID'");	
	header('location:adminpdetails.php');

?>	