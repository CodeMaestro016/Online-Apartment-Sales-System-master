<?php
	include('configAdminparts.php');
	$AdminID=$_GET['adminID'];
 
	$Name = $_POST['editAdminname'];
	$Contact = $_POST['editAdmincontact'];
	$Email = $_POST['editAdminemail'];
	$Password = $_POST['editAdminpass'];
 
	mysqli_query($conn,"UPDATE `admin` SET Name='$Name', Contact='$Contact', Email='$Email', Password='$Password' WHERE `Admin_ID`='$AdminID'");
	header('location:adminpAdminTable.php');
	
?>