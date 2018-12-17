<!DOCTYPE html>
<html>
<head>
	<title>Profile Form</title>
</head>
<body>
	<h2 align="center">Enter Profile Details</h2>
	<form action="App1_Controller/show" method="post">
		<table align="center">
			<tr>
				<td>Firstname:</td>
				<td><input type="text" name="fname" placeholder="Enter FirstName"></td>
			</tr>
			<tr>
				<td>Middlename:</td>
				<td><input type="text" name="mname" placeholder="Enter MiddleName"></td>
			</tr>
			<tr>
				<td>Lastname:</td>
				<td><input type="text" name="lname" placeholder="Enter LastName"></td>
			</tr>
			<tr>
				<td>Contact No.:</td>
				<td><input type="text" name="contact" placeholder="Enter Contact No."></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type="text" name="city" placeholder="Enter City"></td>
			</tr>
			<tr>
				<td><a href="<?php echo base_url(); ?>">Back</a></td>
				<td><input type="submit" name="show" value="Show Profile"></td>
			</tr>
		</table>
	</form>
</body>
</html>