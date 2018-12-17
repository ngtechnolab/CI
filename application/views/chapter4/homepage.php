<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
<h1 align="center">
This site requires authorization to continue,<br>
Please 
<?php echo anchor('Chapter4_Controller/login_form','Login'); ?> or 
<?php echo anchor('Chapter4_Controller/register_form','Register'); ?> to continue..
</h1>
</body>
</html>