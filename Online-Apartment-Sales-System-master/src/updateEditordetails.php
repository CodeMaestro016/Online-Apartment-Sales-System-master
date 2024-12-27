<?php
	include('configAdminparts.php');
	$EditorID=$_GET['editorID'];
 
	$Name = $_POST['editEditorname'];
	$Contact = $_POST['editEditorcontact'];
	$Email = $_POST['editEditoremail'];
	$Password = $_POST['editEditorpass'];
 
	mysqli_query($conn,"UPDATE `system_editor` SET Name='$Name', Contact='$Contact', Email='$Email', Password='$Password' WHERE `Editor_ID`='$EditorID'");
	header('location:adminpEditorTable.php');
	
?>