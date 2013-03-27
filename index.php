<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Login to Teddy Bear Club Nursery</title>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Teddy Bear Club Nursery</a></h1>
		</div>
	</div>
	<div id="menu">
		<ul>		
			<li><a href="http://www.teddybearclubnursery.co.uk/">Nursery Homepage</a></li>
			<li class="current_page_item"><a href="#">Login</a></li>
			<li><a href="registerform.php">Register</a></li>
		</ul>
	</div>
	<div id="three-columns">
		<div id="column1">
			<p></p>
			<p></p>
		</div>
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
					<a href="#">Forgot your password?</a>
			</form>
		</div>
		<div id="column3">
			<p></p>
		</div>
	</div>
</div>
</body>
</html>