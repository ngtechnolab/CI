<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
<font size="5">
	<?php
		echo ("Your fullname is ".$fname." ".$mname." ".$lname."<br>");
		echo ("Your Contact Number is ".$contact."<br>");
		echo ("Your City is ".$city);
	?>
	<br>
	<br>
	<a href="<?php echo base_url(); ?>/index.php/App1_Controller">Back</a>
</font>
</body>
</html>