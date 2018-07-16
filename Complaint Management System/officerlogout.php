<?php
	require 'officercore.php';
	session_destroy();
	header('Location: '.$http_referer);
?>