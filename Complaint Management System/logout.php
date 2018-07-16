<?php
	require 'core.php';
	if(session_destroy())
	{
	header('Location: homepage.php');
	}
	exit();
?>
