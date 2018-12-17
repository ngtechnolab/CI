<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Your File Was Successfully Uploaded</h3>

<?php

echo "<ul>";
foreach ($upload_data as $item => $value) 
{
	echo "<li>".$item.":".$value."</li>";
}
echo "</ul>";
echo "<p>".anchor('Upload_controller','Upload Another File!!')."</p>";
?>
</body>
</html>