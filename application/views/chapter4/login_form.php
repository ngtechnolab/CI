<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

<h1 align="center">Login Form</h1>

<form action="login" method="post">
<table align="center">
	<tr>
		<td align="right">Username:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td align="right">Password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td align="right"><a href="<?php echo base_url(); ?>">Back</a></td>
		<td><input type="submit" name="login" value="Login"></td>
	</tr>	
</table>
</form>

</body>
</html>