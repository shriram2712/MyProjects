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
		<li><a class="active" href="homepage1.php">Home</a></li>
		<li class="dropdown">
    			<a href="javascript:void(0)" class="dropbtn">Others</a>
    			<div class="dropdown-content">
				<a href="g1.php">Areas Under governance</a>
				<a href="d1.php">Desks Information</a>
			</div></li>
		<li style="float:right"><a href="l.php">Log out</a></li>
	</ul>


<?php
	require 'officercore.php';
	require 'connect.php';	//Connects to our database
	if(loggedin())
	{
		$firstname = getuserfield('firstname');	//To display name alogwith You're logged in
		$lastname = getuserfield('lastname');
		$id=getuserfield('id');
		if($id==103)
			echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br /><br /><br /><center><form action="view.php"><input type="submit" value="View complaints"></form></center>';
		if($id==102)
			echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br /><br /><br /><center><form action="view2.php"> <input type="submit" value="View complaints"></form></center>';
		if($id==101)
			echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br /><br /><br /><center><form action="view3.php"> <input type="submit" value="View complaints"></form></center>';
		if($id==203)
			echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br /><br /><br /><center><form action="view4.php"> <input type="submit" value="View complaints"></form></center>';
		if($id==202)
			echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br /><br /><br /><center><form action="view5.php"><input type="submit" value="View complaints"> </form></center>';
		if($id==201)
			echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br /><br /><br /><center><form action="view6.php"><input type="submit" value="View complaints"> </form></center>';
		if($id==303)
			echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br /><br /><br /><center><form action="view7.php"><input type="submit" value="View complaints"> </form></center>';
		if($id==302)
			echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br /><br /><br /><center><form action="view8.php"><input type="submit" value="View complaints"> </form></center>';
		if($id==301)
			echo '<h4 style="text-align:center">You\'re logged in, ' . $firstname . ' ' . $lastname . '<br /><br /><br /><center><form action="view9.php"> <input type="submit" value="View complaints"></form></center>';

	}
	else
	{
		include 'officerloginform.php';	//Show loginform if not logged in
	}
?>
