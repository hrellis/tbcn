<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Register at Teddy Bear Club Nursery</title>
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
			<li><a href="index.php">Login</a></li>
			<li class="current_page_item"><a href="#">Register</a></li>
		</ul>
	</div>
	<div id="three-columns">
		<div id="column1">
			<p></p>
			<p></p>
		</div>
		<div id="column2">
			<h2>Register a child</h2>
			<form id="form1" name="form1" method="post" action="register.php">
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
		</div>
	</div>
</div>
</body>
</html>