<?php
	session_start();
	include ("configAdminparts.php");
	
	if(isset($_GET['editorID']))
	{
		$EditorID = $_GET['editorID'];
		$delete = mysqli_query($conn, "DELETE FROM `system_editor` WHERE `Editor_ID`='$EditorID'");
	}
	
	$query = "SELECT Editor_ID, Name, Contact, Email FROM system_editor";
	$result = mysqli_query($conn, $query);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title> Admin Panel </title>
	<link rel="stylesheet" href="Styles/stylesadminpanel.css">
</head>
<body class="adminpbody">

	<div class="adminpmain" style="float:right">
	
		<p class="adminpdetailstitle"> All Editor Details </p>
		<hr class="adminphrhead">
		
		<button class="adminpregbtn"> <a class="adminpbackreg" href="adminpaddeditor"> Add New </a> </button>
		
		<table class="adminpTables" border="1px solid black">
			<tr>
			<th class="adminpTableshead">Editor-ID</th>
			<th class="adminpTableshead">Name</th>
			<th class="adminpTableshead">Contact</th>
			<th class="adminpTableshead">Email</th>
			<th class="adminpTableshead">Action Edit</th>
			<th class="adminpTableshead">Action Delete</th>
			</tr>
			
			
			<?php
            
                while ($editordatails = mysqli_fetch_assoc($result))
				{
                    echo "
					<tr>
						<td>" .$editordatails['Editor_ID']. "</td>
						<td>" .$editordatails['Name']. "</td>
						<td>" .$editordatails['Contact']. "</td>
						<td>" .$editordatails['Email']. "</td>
					
						<td> 
							<a href='editEditordetails.php?editorID=".$editordatails['Editor_ID']."'> Edit </a> 
						</td>
							
						<td> 
							<a href='adminpEditorTable.php?editorID=".$editordatails['Editor_ID']."'> Delete </a> 
						</td>
					
					</tr>";
                }
            
            ?>
			
		</table>
		
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