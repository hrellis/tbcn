<!--<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Register a new member of staff</title>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Teddy Bear Club Nursery Admin</a></h1>
		</div>
	</div>-->
<?php
	include "templateStart.php";
?>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Add Staff</a></h1>
			<li><a href="logout.php">Logout</a></h1>
		</ul>
    </div><!--menu-->


	<div id="three-columns">
		
		<div id="column1">
        	<p></p>
        </div><!--col1-->
        
        <div id="column2">
			<h2>Register Guardian</h2>
			<form action="/register/registerGuardianChild.php" method="post">
				<table>
					<h3>First Guardian</h3>
                    <tr>
						<td>First Name: </td>
						<td><input type="text" name="firstnameGuardian"></td>
					</tr>
                    
					<tr>
						<td>Surname: </td>
						<td><input type="text" name="surnameGuardian"></td>
					</tr>
                    
					<tr>
                        <td>House Number: </td>
                        <td><input type="text" name="housenumberGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Street: </td>
                        <td><input type="text" name="streetGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Town/City: </td>
                        <td><input type="text" name="cityGuardian"></td>
					</tr>
                    
					<tr>
                        <td>County: </td>
                        <td><input type="text" name="countyGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Postcode: </td>
                        <td><input type="text" name="postcodeGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Country: </td>
                        <td><input type="text" name="countryGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Mobile Number: </td>
                        <td><input type="text" name="mobileGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Home Phone Number: </td>
                        <td><input type="text" name="phoneGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Email: </td>
                        <td><input type="text" name="emailGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Username: </td>
                        <td><input type="text" name="userGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Password: </td>
                        <td><input type="password" name="passwordGuardian"></td>
					</tr>
                    
					<tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" name="confirmpasswordGuardian"></td>
					</tr>
                    
                    <h3>Second Guardian</h3>
                    <tr>
						<td>First Name: </td>
						<td><input type="text" name="firstnameGuardian2"></td>
					</tr>
                    
					<tr>
						<td>Surname: </td>
						<td><input type="text" name="surnameGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>House Number: </td>
                        <td><input type="text" name="housenumberGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Street: </td>
                        <td><input type="text" name="streetGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Town/City: </td>
                        <td><input type="text" name="cityGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>County: </td>
                        <td><input type="text" name="countyGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Postcode: </td>
                        <td><input type="text" name="postcodeGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Country: </td>
                        <td><input type="text" name="countryGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Mobile Number: </td>
                        <td><input type="text" name="mobileGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Home Phone Number: </td>
                        <td><input type="text" name="phoneGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Email: </td>
                        <td><input type="text" name="emailGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Username: </td>
                        <td><input type="text" name="userGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Password: </td>
                        <td><input type="password" name="passwordGuardian2"></td>
					</tr>
                    
					<tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" name="confirmpasswordGuardian2"></td>
					</tr>
                    
					<tr>
                        <td></td>
                        <td><input type="submit" name="submit"></td>
                    </tr>
				</table>
			</form>
		</div>
	
    	<div id="column3">
        	<p></p>
        </div><!--col3-->
        
	</div><!--3columns-->
    
<?php
	include "templateEnd.php";
?>