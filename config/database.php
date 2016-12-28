<?php
	if(!@mysql_connect('localhost','root',''))die('not connected');
	if(!@mysql_select_db('personal'))die('not selected');
?>