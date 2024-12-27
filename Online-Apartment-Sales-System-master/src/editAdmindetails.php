<?php
	include('configAdminparts.php');
	
	$AdminID = $_GET['adminID'];
	$query = mysqli_query($conn,"SELECT * FROM `admin` WHERE `Admin_ID`='$AdminID'");
	$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title class="editAdminhead">Admin Details Edit </title>
	<link rel="stylesheet" href="Styles/styleseditdetails.css">
</head>
<body class="editAdminbody">
	
	<form class="editAdminform" method="POST" action="updateAdmindetails.php?adminID=<?php echo $AdminID; ?>">
		<h2 class="editAdminhead">Admin Details Edit</h2>
		<hr>
		<p class="editadmintitle"> Name: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Name']; ?>" name="editAdminname">
		
		<p class="editadmintitle"> Contact: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Contact']; ?>" name="editAdmincontact">
		
		<p class="editadmintitle"> Email: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Email']; ?>" name="editAdminemail">
		
		<p class="editadmintitle"> Password: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Password']; ?>" name="editAdminpass">
		
		<br>
		<input class="editadminbtn" style="margin-left:450px" type="submit" value="Update" name="submit">
		<button class="editadminbtn"> <a class="editAdminlink" href="adminpAdminTable.php"> Back </a> </button>
		
		
	</form>
</body>
</html>