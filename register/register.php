<?php
	include "template/templateStart.php";
?>

<?php
	/*?>//get the connection details
	$host = 'arlia.computing.dundee.ac.uk';
	$user = '12ac3u11';
	$password = 'cba123';
	$database = '12ac3d11';
	
	$conn = mysql_connect($host,$user,$password) or die('Server Information is not Correct');
	mysql_select_db($database,$conn) or die('Database Information is not correct');<?php */
	
	include 'databaseConnection.php';
	
	//set up the field variables
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];
	$passwordConfirm = $_POST['txtPasswordConfirm'];
	$password = md5($password);
	$passwordConfirm = md5($passwordConfirm);
	
	//if passwords match, allow access to the databse and system
	if($password == $passwordConfirm)
	{
		if(isset($_POST['btnRegister']))
		{
			$query = "insert into login(username,password)values('$username','$password')";
			$res = mysql_query($query);
			header('location:success_register.php');
		}
	} 
	else //else give feedback
	{
		print "The passwords you have entered do not match.";
	}	
?>

<?php
	include "template/templateEnd.php";
?>