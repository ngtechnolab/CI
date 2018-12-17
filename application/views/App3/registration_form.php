<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

<h2 align="center">Registration Form</h2>

<form action="App3_COntroller/register" method="post">
<table align="center">
	<tr>
		<td align="right">Customer Name:</td>
		<td><input type="text" name="name" placeholder="Enter Name"></td>
	</tr>
	<tr>
		<td align="right">Gender:</td>
		<td>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
		</td>
	</tr>
	<tr>
		<td align="right">Email:</td>
		<td><input type="email" name="email" placeholder="Enter Email"></td>
	</tr>
	<tr>
		<td align="right">Mobile No.:</td>
		<td><input type="text" name="mobile" placeholder="Enter Mobile No."></td>
	</tr>
	<tr>
		<td align="right">Address:</td>
		<td><textarea name="address" placeholder="Enter Address"></textarea></td>
	</tr>
	<tr>
		<td align="right">City:</td>
		<td><input type="text" name="city" placeholder="Enter city"></td>
	</tr>
	<tr>
		<td align="right">Pincode:</td>
		<td><input type="text" name="pincode" placeholder="Enter Pincode"></td>
	</tr>
	<tr>
		<td align="right"><a href="<?php echo base_url(); ?>">Back</a></td>
		<td><input type="submit" name="register" value="Register"></td>
	</tr>
</table>
</form>
</body>
</html>