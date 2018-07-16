<?php
	require 'connect.php';
	require 'core.php';
	//Processing of form when submit button is clicked
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_hash = md5($_REQUEST['password']);
		if(!empty($username) && !empty($password))
		{
			$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password_hash';";
			if($query_run = mysqli_query($conn,$query))
			{
				$query_num_rows = mysqli_num_rows($query_run);
				if($query_num_rows == 0)
					echo "<script type='text/javascript'>alert('Invalid username and password combination.');</script>";
				else if($query_num_rows == 1)
				{
					$user_id = mysqli_fetch_assoc($query_run);
					$_SESSION['user_id'] = $user_id;	//Store in SESSION
					header('Location: index.php');
				}
			}
		}
		else
			echo '<script>alert("Please supply username and password.");</script>';
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
		<li><a class="active" href="homepage.php">Home</a></li>

		<li class="dropdown">
    			<a href="javascript:void(0)" class="dropbtn">Others</a>
    			<div class="dropdown-content">

				<a href="g.php">Areas Under governance</a>
				<a href="d.php">Desks Information</a>

			</div></li>
		<li style="float:right"><a href="officerloginform.php">Officer Sign In</a></li>
		<li style="float:right"><a href="loginform.php">User Sign In</a></li>
	</ul>

<h2 style="text-align:center">Welcome User!</h2>
<h3 style="text-align:center">Please Log in to register a complaint or view status </h3><br>

<!--Login form with username and password-->
<form action = "loginform.php" method = "POST">
	<br><center>Username : <input type = "text" name = "username" /> <br /><br /><br />
	Password : <input type = "password" name = "password" /> <br /><br /><br />
	<input type = "submit" value = "Log In" /></center>
</form>
<a href="register.php"> Don't have an account? Its quite easy to signup </a>
