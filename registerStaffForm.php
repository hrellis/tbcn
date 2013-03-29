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
			<li><a href="http://www.teddybearclubnursery.co.uk/">Nursery Homepage</a></li>
                <li><a href="registerGuardianChild.php">Register Child</a></li>
                <li><a href="registerStaffForm.php">Register Staff</a></li>
                <li><a href="viewFees.php">View Fees</a></li>
                <li><a href="logout.php">Logout</a></li><li class="current_page_item"><a href="#">Add Staff</a></h1>
			<li><a href="logout.php">Logout</a></h1>
		</ul>
    </div><!--menu-->


	<div id="three-columns">
		
		<div id="column1">
        	<p></p>
        </div><!--col1-->
        
        <div id="column2">
			<h2>Register Staff</h2>
			<form action="registerStaff.php" method="post">
				<table>
					<tr>
						<td>First Name: </td>
						<td><input type="text" name="firstname"></td>
					</tr>
                    
					<tr>
						<td>Surname: </td>
						<td><input type="text" name="surname"></td>
					</tr>
                    
					<tr>
                        <td>Role: </td>
                        <td>
                            <select name="role">
                                <option value="admin">Admin</option>
                                <option value="other">Other</option>
                            </select>
                        </td>
					</tr>
                    
					<tr>
                        <td>Currently Employed: </td>
                        <td>
                            <input type="radio" name="employed" id="employed" value="1" />Yes
                            <input type="radio" name="employed" id="employed" value="0" />No
                        </td>
					</tr>
                    
					<tr>
                        <td>House Number: </td>
                        <td><input type="text" name="housenumber"></td>
					</tr>
                    
					<tr>
                        <td>Street: </td>
                        <td><input type="text" name="street"></td>
					</tr>
                    
					<tr>
                        <td>Town/City: </td>
                        <td><input type="text" name="city"></td>
					</tr>
                    
					<tr>
                        <td>County: </td>
                        <td><input type="text" name="county"></td>
					</tr>
                    
					<tr>
                        <td>Postcode: </td>
                        <td><input type="text" name="postcode"></td>
					</tr>
                    
					<tr>
                        <td>Country: </td>
                        <td><input type="text" name="country"></td>
					</tr>
                    
					<tr>
                        <td>Mobile Number: </td>
                        <td><input type="text" name="mobile"></td>
					</tr>
                    
					<tr>
                        <td>Home Phone Number: </td>
                        <td><input type="text" name="phone"></td>
					</tr>
                    
					<tr>
                        <td>Email: </td>
                        <td><input type="text" name="email"></td>
					</tr>
                    
					<tr>
                        <td>Username: </td>
                        <td><input type="text" name="user"></td>
					</tr>
                    
					<tr>
                        <td>Password: </td>
                        <td><input type="password" name="password"></td>
					</tr>
                    
					<tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" name="confirmpassword"></td>
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