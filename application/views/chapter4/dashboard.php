<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>

<h3>
<p>Welcome to the dashboard! you can only see this page when you are logged in. This would be the page of your application where you shows user your most recent activity, anything they have missed or give them links to other areas of your application. In this case we simply welcome you to the logged in area. I guess you could <?php echo anchor('Chapter4_Controller/logout','Logout'); ?> if you wanted to?</p></h3>

<h1><?php print_r($sdata['session_data']) ?></h1>

</body>
</html>