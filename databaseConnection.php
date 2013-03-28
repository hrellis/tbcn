<!--
	databaseConnection.php
    
    *Connects to the database
 -->
 <?php
	//login credentials
	$host = 'arlia.computing.dundee.ac.uk';
	$user = '12ac3u11';
	$password = 'cba123';
	$database = '12ac3d11';
	
	//connect using the above and report error if fail
	$conn = mysql_connect($host,$user,$password) or die('Server Information is not Correct');
	mysql_select_db($database,$conn) or die('Database Information is not correct');
	
	//closes the database connection
	//$con->close();
?>

//get the connection details
	
	
	