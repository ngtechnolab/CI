<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

echo $error;
// echo form_open_multipart('Upload_controller/do_upload');

?>

<form action="<?php echo base_url(); ?>/index.php/Upload_controller/do_upload" method="post" enctype="multipart/form-data">
	
<input type="file" name="userfile" size="100"/>
<br><br>
<input type="submit" value="UPLOAD">
</form>
</body>
</html>