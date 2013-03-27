<?php
	//if submit is selected, connect to databse
	if (isset($_POST['submit'])) 
	{
		$con = mysql_connect("arlia.computing.dundee.ac.uk", "12ac3u11", "cba123");
	
		//if there's no connection, exit and report error
		if (!$con) 
		{
			die("Can not connect: " . mysql_error());
		}
		//select the database
		mysql_select_db("12ac3d11",$con);
		
		//set up the variables and hash password
		$password = $_POST['password'];
		$password = md5($password);
		$passwordConfirm = $_POST['confirmpassword'];
		$passwordConfirm = md5($passwordConfirm);
		
		//if the two password are the same, insert the details into the database and redirect to success page
		if($password == $passwordConfirm)
		{
			$sql1="INSERT INTO contact (houseNumberName,street,city,county,postcode,country,mobileNumber,homeNumber,emailAddress)
	VALUES('$_POST[housenumber]','$_POST[street]','$_POST[city]','$_POST[county]','$_POST[postcode]','$_POST[country]','$_POST[mobile]','$_POST[phone]','$_POST[email]')";
			$sql2="INSERT INTO staff (firstName,surname,role,currentlyEmployed,contactID) VALUES('$_POST[firstname]','$_POST[surname]','$_POST[role]','$_POST[employed]',LAST_INSERT_ID())";
			$sql3="INSERT INTO login (username,password) VALUES('$_POST[user]','$password')"; 
		
			mysql_query($sql1,$con);
			mysql_query($sql2,$con);
			mysql_query($sql3,$con);
			header('location:success_register.php');
		} 
		else //else let user know that passwords do not match
		{
			print "The passwords you have entered do not match.";
		}
		//close the connection
		mysql_close($con);
	}
?>