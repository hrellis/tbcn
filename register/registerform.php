<?php
	include "template/templateStart.php";
?>
	<div id="three-columns">
		
		<div id="column1">
        	<p></p>
        </div><!--column 1-->
        
        <div id="column2">
			<h2>Register a child</h2>
			<form id="form1" name="form1" method="post" action="/register/register.php">
				<table>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="txtUser" id="txtUser" /></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="txtPassword" id="txtPassword" /></td>
					</tr>
					<tr>
					<tr>
						<td>Confirm Password: </td>
						<td><input type="password" name="txtPasswordConfirm" id="txtPasswordConfirm" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="btnRegister" id="btnRegister" value="Register"></td>
					</tr>
				</table>
			</form>
		</div>
        
        <div id="column3">
        	<p></p>
        </div><!--column 3-->
		
	</div><!--three columns-->
<?php
	include "template/templateEnd.php";
?>