<?php
	include 'config/database.php';
	$file_name = $_FILES['photo']['name'];
	$file_tmp_name = $_FILES['photo']['tmp_name'];
	$file_loc="profileimages/";
	$file_last_name=rand(1,1000)."-".$file_name;
	if(move_uploaded_file(	$file_tmp_name , $file_loc.$file_last_name))
	{
		$query = "INSERT INTO `images`(`id`, `photo`) VALUES (NULL,'$file_last_name')";
		$q = mysql_query($query);

	}
?>