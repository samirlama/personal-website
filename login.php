<?php
include 'config/database.php';
	$username=mysql_real_escape_string(htmlentities($_POST['username']));
	$password=mysql_real_escape_string(htmlentities($_POST['password']));
	$pass_hash=md5($password);
	

	
	$query="SELECT `username`, `password` FROM `user` WHERE username='$username' AND password='$pass_hash'";
	$q=mysql_query($query);
	if(!$q)
	{
		header('location:index.php?err=1');
		exit();
	}
	else
	{
		header('location:admin.php');
	}
	



?>