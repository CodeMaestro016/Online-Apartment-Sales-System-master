<?php
	include('configAdminparts.php');
	
	$AdminID = $_GET['adminID'];
	$query = mysqli_query($conn,"SELECT * FROM `admin`");
	$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit My Account Details</title>
</head>
<body>
	<h2 class="editAdminhead">Admin Details Edit</h2>
	<form method="GET" action="updatePanelAdmindetails.php?>">
	
		<p class="editadmintitle"> Name: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Name']; ?>" name="adpname">
		
		<p class="editadmintitle"> Contact: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Contact']; ?>" name="adpcontact">
		
		<p class="editadmintitle"> Email: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Email']; ?>" name="adpemail">
		
		<p class="editadmintitle"> Password: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Password']; ?>" name="adppass">
		
		<input class="editadminbtn" type="submit" value="Update" name="submit">
		<button class="editadminbtn"> <a class="editAdminlink" href="adminpdetails.php"> Back </a> </button>
		
		
	</form>
</body>
</html>