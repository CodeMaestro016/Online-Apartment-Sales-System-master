<?php
	session_start();
	include ("configAdminparts.php");
	
	$query = "SELECT Seller_ID, Name, Contact, Email FROM seller";
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
	
		<p class="adminpdetailstitle"> All Seller Details </p>
		<hr class="adminphrhead">
		
		
		<table class="adminpTables" border="1px solid black">
			<tr>
			<th class="adminpTableshead">Seller-ID</th>
			<th class="adminpTableshead">Name</th>
			<th class="adminpTableshead">Contact</th>
			<th class="adminpTableshead">Email</th>
			
			</tr>
			
			<tr>
			<?php
            
                while ($user_data = mysqli_fetch_assoc($result))
				{
                    echo "<td>" .$user_data['Seller_ID']. "</td><td>" .$user_data['Name']. "</td><td>" .$user_data['Contact']. "</td><td>" .$user_data['Email']. "</td></tr>";
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