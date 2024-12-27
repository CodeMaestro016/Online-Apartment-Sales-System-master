<?php
	include('configAdminparts.php');
	
	$EditorID = $_GET['editorID'];
	$query = mysqli_query($conn,"SELECT * FROM `system_editor` WHERE `Editor_ID`='$EditorID'");
	$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Details Edit </title>
	<link rel="stylesheet" href="Styles/styleseditdetails.css">
</head>
<body class="editAdminbody">
	<form class="editAdminform" method="POST" action="updateEditordetails.php?editorID=<?php echo $EditorID; ?>">
		<h2 class="editAdminhead">Editor Details Edit</h2>
		<hr>
		<p class="editadmintitle"> Name: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Name']; ?>" name="editEditorname">
		
		<p class="editadmintitle"> Contact: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Contact']; ?>" name="editEditorcontact">
		
		<p class="editadmintitle"> Email: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Email']; ?>" name="editEditoremail">
		
		<p class="editadmintitle"> Password: </p>
		<input class="editadminbar" type="text" value="<?php echo $result['Password']; ?>" name="editEditorpass">
		
		<br>
		<input class="editadminbtn" style="margin-left:450px" type="submit" value="Update" name="submit">
		<button class="editadminbtn"> <a class="editAdminlink" href="adminpEditorTable.php"> Back </a> </button>
		
		
	</form>
</body>
</html>