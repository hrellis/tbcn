<?php
//*********Server Information to establish a connection ****** 
  
$host = 'localhost'; // Server Host Name 
$user = 'rossstrachan'; // Server User Name 
$password = 'tester'; // Server Password 
$db = 'test'; // Your Database 
  
//=======following function to establish a connection with server======================== 
$link = mysql_connect($host,$user,$password) or die('Error in Server information');
//=============================Select Your Database======================================= 
mysql_select_db($db,$link) or die('Can not Select Databasse'); 
  
//***************End Connection Establishment*************************************** 
//*******Form Information******** 
  
$userName = $_POST['username']; //User Name sent from Form 
$password = $_POST['password']; // Password sent from Form 
$password = md5($password);
  
//*********retrieving data from Database********** 
  
$query = "select * from members where username='$userName' and password='$password'"; 
  
$res = mysql_query($query); //Executing query and saving result in Result Set 
  
//************mysql_num_rows is counting num of rows************ 
  
$rows = mysql_num_rows($res); 
  
//**********if $userName and $password will match database, The above function will return 1 row 
  
if($rows==1) 
  
//***if the userName and password matches then register a session and redrect user to the Successfull.php 
{ 
session_register("userName"); 
session_register("password"); 
header("location:success.php"); 
} 
else 
{ 
echo 'Data Does Not Match <br /> Re-Enter UserName and Password'; 
} 
?>