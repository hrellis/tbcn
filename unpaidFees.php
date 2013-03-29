<?php
	include 'databaseConnection';
	//gets the month and forms the date
	$date = '1st '.date('F Y');
	//echo $date;
	  
	//*********retrieving data from Database********** 
	  
	$query = "select * from guardianInvoice where dateInvoiceIssued='$date' and dateInvoicePaid='NULL'"; 
	  
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
