<?php
	//*********Server Information to establish a connection ****** 
	  
	$host = 'arlia.computing.dundee.ac.uk'; // Server Host Name 
	$user = '12ac3u11'; // Server User Name 
	$password = 'cba123'; // Server Password 
	$db = '12ac3d11'; // Your Database 
	  
	//=======following function to establish a connection with server======================== 
	$link = mysql_connect($host,$user,$password) or die('Error in Server information');
	//=============================Select Your Database======================================= 
	mysql_select_db($db,$link) or die('Cannot Select Databasse'); 
	  
	//***************End Connection Establishment*************************************** 
	//*******Form Information******** 
	  
	$userName = $_POST['username']; //User Name sent from Form 
	$password = $_POST['password']; // Password sent from Form 
	$password = md5($password);
	  
	//*********retrieving data from Database********** 
	  
	$query = "select * from login where username='$userName' and password='$password'"; 
	  
	$res = mysql_query($query); //Executing query and saving result in Result Set 
	  
	//************mysql_num_rows is counting num of rows************ 
	  
	$rows = mysql_num_rows($res); 
	  
	//**********if $userName and $password will match database, The above function will return 1 row 
	  
	if($rows==1) 
	  
	//***if the userName and password matches then register a session and redirect user to the Successfull.php 
	{ 
		session_register("userName"); 
		session_register("password"); 
		header("location:success.php"); 
	} 
	else 
	{ 
		include 'template/templateStart.php';
		echo 'Data Does Not Match <br /> Re-Enter UserName and Password'; 
		include 'template/templateEnd.php';
	} 
?>