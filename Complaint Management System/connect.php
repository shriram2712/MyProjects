<?php
//Connects to our database complaint_management
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
	$mysql_db = 'complaint_management';
	if(!$conn || !mysqli_select_db($conn,$mysql_db))
	{
		die(mysqli_connect_error());	//Kill the page
	}
?>
