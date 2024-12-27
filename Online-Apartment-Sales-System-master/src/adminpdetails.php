<?php
	session_start();
	include('configAdminparts.php');
	
	
	$query = mysqli_query($conn,"SELECT * FROM admin");
	$result = mysqli_fetch_array($query);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title> Admin Panel </title>
	<link rel="stylesheet" href="Styles/stylesadminpanel.css">
</head>
<body class="adminpbody">

	<div class="adminpmain" style="float:right">
		<form class="adminpdetails" method="POST" action="updatePanelAdmindetails.php?adminID=<?php echo $AdminID; ?>">
		
			<p class="adminpdetailstitle"> My Account Details </p>
			<hr>
			<p class="adminpftitle"> Admin_ID: </p>
			<input class="adminpdetailsbar" type="text" name="adpid" value="<?php echo $result['Admin_ID']; ?>" readonly >
							
			<p class="adminpftitle"> Name: </p>
			<input class="adminpdetailsbar" type="text" name="adpname" value="<?php echo $result['Name']; ?>" > 
 
 
			<p class="adminpftitle"> Contact: </p>
			<input class="adminpdetailsbar" type="text" name="adpcontact" value="<?php echo $result['Contact']; ?>" > 
 
 
			<p class="adminpftitle"> Email: </p>
			<input class="adminpdetailsbar" type="email" name="adpemail" value="<?php echo $result['Email']; ?>" > 
 
 
			<p class="adminpftitle"> Password: </p>
			<input class="adminpdetailsbar" type="password" name="adppass" value="<?php echo $result['Password']; ?>" >
 
			<input class="adminpregbtn" type="submit" value="Update" name="submit">
			
			
 
		</form>
	</div>
	
	<ul class="adminplist">
		<li class="adminpitem"> <center> <a href="adminpmain.html"> <img class="adminplink" src="Images/logo.png" alt="Logo" width="20%" height="20%"> </a> </center> </li>
		<li class="adminpitem"> <a class="adminplink" href="adminpdetails.php"> Admin Details </a> </li>
		<li class="adminpitem"> <a class="adminplink" href="adminpAdminTable.php"> Admin's </a> </li>
		<li class="adminpitem"> <a class="adminplink" href="adminpEditorTable.php"> Editor's </a> </li>
		<li class="adminpitem"> <a class="adminplink" href="adminpSellerTable.php"> Seller's </a> </li>
		<li class="adminpitem"> <a class="adminplink" href="adminpBuyerTable.php"> User's </a> </li>
		<li class="adminpitem"> <a class="adminplink" href="adminpApartmentTable.php"> Apartments </a> </li>
		<li class="adminpitem"> <a class="adminplink" href="adminpFeedbackTable.php"> Feedback's </a> </li>
		<li class="adminpitem"> <a class="adminplink" href="adminpContactus.php"> Contact Us </a> </li>
		<li class="adminpitem"> <a class="adminplink" href="PageHP.html"> Back to Home </a> </li>
		
		<li class="adminpitem"> <a class="adminplink" href="logoutAdmin.php"> Log Out </a> </li>
	</ul>
	
	
	

</body>
</html>
