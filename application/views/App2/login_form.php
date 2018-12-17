<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

<h2 align="center">Login Form</h2>
<form action="App2_Controller/login" method="post">
	<table align="center">
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" placeholder="Enter Username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" placeholder="Enter Password"></td>
		</tr>
		<tr>
			<td><a href="<?php echo base_url(); ?>">Back</a></td>
			<td><input type="submit" name="login" value="Login"></td>
		</tr>
	</table>
</form>

</body>
</html>