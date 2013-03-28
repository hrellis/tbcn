<!--
	*Main page*
	-provides a login or register request to ensure that only those who have access can view page
-->

<?php
	include "template/templateStart.php";
?>

	  <div id="menu">
            <ul>
                <li><a href="http://www.teddybearclubnursery.co.uk/">Nursery Homepage</a></li>
                <li><a href="index.php">Login</a></li>
                <li><a href="/registerform.php">Register</a></li>
            </ul>
        </div><!--menu-->
        
     <div id="three-columns">
		
		<div id="column1">
        	<p></p>
        </div><!--col1-->
        
        <div id="column2">
			<h2>Login</h2>
            
            
			<form id="form1" name="form1" method="post" action="login.php">
				<table>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Login"></td>
					</tr>
				</table>
                
                <!--provides a link to a reset password page-->
					<!--<a href="#">Forgot your password?</a>-->
			</form>
		</div>
		
        <div id="column3">
        	<p></p>
        </div><!--col1-->
        
	</div>
<?php
	include "template/templateEnd.php";
?>