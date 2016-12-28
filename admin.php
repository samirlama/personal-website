<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link type="text/css" href="css/styleadmin.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
	<?php 
	include 'includes/navbar.php';
	?>
	<div class="content">
		<div class="photoupload">
			<form action="insertphoto.php" method="POST" enctype="multipart/form-data">
			<label>UPLOAD YOUR PROFILE PICTURE</label><br><br>
				<input id="photo" type="file" name="photo" required><br><br>
				<input id="login" type="submit" value="Upload">
			</form>
		</div>
	</div>
	</div>



</body>
</html>