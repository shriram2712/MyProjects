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




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<img src="logo.jpg">
	<ul>
		<li><a class="active" href="homepage2.php">Home</a></li>
		<li><a href="complaint1.php">Complaint Registration</a></li>

    		<li class="dropdown">
    			<a href="javascript:void(0)" class="dropbtn">Others</a>
    			<div class="dropdown-content">
				<a href="c.php">Status</a>
				<a href="g2.php">Areas Under governance</a>
				<a href="d2.php">Desks Information</a>
			</div></li>
		<li style="float:right"><a href="l2.php">Log out</a></li>
	</ul>

<?php
	require 'core.php';
	require 'connect.php';	//Connects to our database
	// Report all errors except E_NOTICE
        error_reporting(E_ALL & ~E_NOTICE);
	
	if(loggedin())
	{
		$firstname = getuserfield('firstname');	//To display name alongwith You're logged in
		$lastname = getuserfield('lastname');
		echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br>You can now check the status of your complaints or register for a new complaint if you have not registered a complaint<br /><br /><br />';
}
	else
	{
		include 'loginform.php';	//Show loginform if not logged in
	}
?>
