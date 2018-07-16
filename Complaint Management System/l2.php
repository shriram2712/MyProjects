<?php

session_start();
// Report all errors except E_NOTICE
        error_reporting(E_ALL & ~E_NOTICE);
	

	if (!isset($_SESSION['user_id'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: homepage.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: homepage.php");
	}

?>


<?php require 'core.php'; ?>
    <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<img src="logo.jpg">
	<ul>
		<li><a class="active" href="homepage1.php">Home</a></li>

		<li class="dropdown">
    			<a href="javascript:void(0)" class="dropbtn">Others</a>
    			<div class="dropdown-content">

				<a href="g1.php">Areas Under governance</a>
				<a href="d1.php">Desks Information</a>

			</div></li>
		<li style="float:right"><a href="l.php">Log Out</a></li>
	</ul>
<h3>Do you really want to log out?</h3>
<form method="post" action="logout.php"><br><br><center><input type="submit" value="yes!"></form>
<form method="post" action="homepage2.php"><br><br><center><input type="submit" value="no!"></form>
