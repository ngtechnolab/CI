<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

<h1 align="center">Registration Form</h1>

<form action="register" method="post">
<table align="center">
	<tr>
		<td align="right">Username:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td align="right">Email:</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td align="right">Password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td align="right">Confirm Password:</td>
		<td><input type="Password" name="conf_password"></td>
	</tr>
	<tr>
		<td align="right"><a href="<?php echo base_url(); ?>">Back</a></td>
		<td><input type="submit" name="register" value="Register Account"></td>
	</tr>	
</table>
</form>

</body>
</html>