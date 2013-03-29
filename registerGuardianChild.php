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
		//Guardian 1
		$passwordGuardian = $_POST['passwordGuardian'];
		$passwordGuardian = md5($passwordGuardian);
		$passwordGuardianConfirm = $_POST['confirmpasswordGuardian'];
		$passwordGuardianConfirm = md5($passwordGuardianConfirm);
		
		//Guardian 2
		$passwordGuardian2 = $_POST['passwordGuardian2'];
		$passwordGuardian2 = md5($passwordGuardian2);
		$passwordGuardian2Confirm = $_POST['confirmpasswordGuardian2'];
		$passwordGuardian2Confirm = md5($passwordGuardian2Confirm);
		
		//if the two password are the same, insert the details into the database and redirect to success page
		if($passwordGuardian == $passwordGuardianConfirm && $passwordGuardian2 == $passwordGuardian2Confirm)
		{
			//insert Child details
			$sql1="INSERT INTO contact (houseNumberName,street,county,postcode,country,city) VALUES('$_POST[housenumber]','$_POST[street]','$_POST[county]','$_POST[postcode]','$_POST[country]','$_POST[city]')";
			$sql2="INSERT INTO child (firstName,surname,,currentlyEnrolled,gender,dateOfBirth,contactID,) VALUES('$_POST[firstname]','$_POST[surname]','$_POST[role]','$_POST[enrolled]','$_POST[gender]','$_POST[day].$_POST[month].$_POST[year]',LAST_INSERT_ID())";
			//echo 'SQL 2:'.$sql2;
			$sql3="INSERT INTO login (username,password) VALUES('$_POST[user]','$password')"; 
			
			//-------------------------------------------------------
			//insert Guardian 1 details
			$sql1="INSERT INTO contact (houseNumberName,street,county,postcode,country,mobileNumber,homeNumber,emailAddress,city) VALUES('$_POST[housenumber]','$_POST[street]','$_POST[county]','$_POST[postcode]','$_POST[country]','$_POST[mobile]','$_POST[phone]','$_POST[email]','$_POST[city]')";
			$sql2="INSERT INTO guardian (firstName,surname,,currentlyEmployed,username,contactID,) VALUES('$_POST[firstname]','$_POST[surname]','$_POST[role]','$_POST[employed]','$_POST[user]',LAST_INSERT_ID())";
			//echo 'SQL 2:'.$sql2;
			$sql3="INSERT INTO login (username,password) VALUES('$_POST[user]','$password')"; 
		
			//-------------------------------------------------------
			//insert Guardian 2 details
			$sql1="INSERT INTO contact (houseNumberName,street,county,postcode,country,mobileNumber,homeNumber,emailAddress,city) VALUES('$_POST[housenumber]','$_POST[street]','$_POST[county]','$_POST[postcode]','$_POST[country]','$_POST[mobile]','$_POST[phone]','$_POST[email]','$_POST[city]')";
			$sql2="INSERT INTO guardian (firstName,surname,,currentlyEmployed,username,contactID,) VALUES('$_POST[firstname]','$_POST[surname]','$_POST[role]','$_POST[employed]','$_POST[user]',LAST_INSERT_ID())";
			//echo 'SQL 2:'.$sql2;
			$sql3="INSERT INTO login (username,password) VALUES('$_POST[user]','$password')"; 
		
			//child details
			mysql_query($sql1,$con);
			mysql_query($sql2,$con);
			mysql_query($sql3,$con);
			//guardian 1 details
			mysql_query($sql4,$con);
			mysql_query($sql5,$con);
			mysql_query($sql6,$con);
			//guardian 2 details
			mysql_query($sql7,$con);
			mysql_query($sql8,$con);
			mysql_query($sql9,$con);
			
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