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
			<h2>Register Child</h2>
			<form action="/register/registerGuardianForm.php" method="post">
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
                        <td>Gender: </td>
                        <td>
                            <select name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </td>
					</tr>
                    
					<tr>
                        <td>Date of birth: </td>
                        <td>
                            <input type="text" name="day" placeholder="day"/>
                            <input type="text" name="month" placeholder="month"/>
                            <input type="text" name="year" placeholder="year" />
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
                        <td>Currently Enrolled: </td>
                        <td>
                            <input type="radio" name="enrolled" id="enrolled" value="1" />Yes
                            <input type="radio" name="enrolled" id="enrolled" value="0" />No
                        </td>
					</tr>
                    
					<tr>
                        <td></td>
                        <td><input type="submit" name="Next: Add Guardian"></td>
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