<!--
	databaseConnection.php
    
    *Connects to the database
 -->
 <?php
//login credentials
$host="arlia.computing.dundee.ac.uk";
$port=3306;
$socket="";
$user="12ac3u11";
$password="";
$dbname="";

//connect using the above and report error if fail
$connection = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server. Error:' . mysqli_connect_error());

//closes the database connection
//$con->close();

?>