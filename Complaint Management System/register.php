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

<h2 style="text-align:center">Welcome New User!</h2>
<h3 style="text-align:center">Please fill out the following details to register </h3><br>
<?php
	require 'core.php';
	require 'connect.php';
	if(!loggedin())
	{
		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['lastname']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_again = $_POST['password_again'];
			$password_hash = md5($password);
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($lastname))
			{
				if($password != $password_again)
				{
					echo '<center>Passwords do not match</center>';
				}
				else
				{
					$query = "SELECT username FROM users WHERE username = '$username'";
					$query_run = mysqli_query($conn,$query);
					$query_num_rows = mysqli_num_rows($query_run);
					if($query_num_rows == 1)
					{
						echo '<center>The username ' . $username .' already exists.</center>';
					}				
					else
					{
						$q1 = "SELECT * FROM users";
						$q_ru=mysqli_query($conn,$q1);
						$q1_rows=mysqli_num_rows($q_ru);
						$id=++$q1_rows;
						$query = "INSERT INTO users(id, username,password,firstname,lastname) VALUES ('$id', '$username', '$password_hash', '$firstname','$lastname')";
						if($query_run = mysqli_query($conn,$query))
						{
							header('Location: register_success.php');	
						}
						else
						{
							echo '<center>Sorry, we couldn\'t register you at this time. Try again later<center>';
						}
					}
				}
			}
			else
			{
				echo '<center>All fields are mandatory<center>';
			}
		}		
?>		
	<form action = "register.php" method = "POST">
              <center>
		<br><br>Username : <input type = "text" name = "username" value = "<?php echo @$username;?>"/><br />
		<br>Password : <input type = "password" name = "password" /><br />
		<br>Confirm : <input type = "password" name = "password_again" /><br />
		<br>Firstname : <input type = "text" name = "firstname" value = "<?php echo @$firstname;?>"/><br />
		<br>Lastname : <input type = "text" name = "lastname" value = "<?php echo @$lastname;?>"/><br />
		<br><input type = "submit" value = "Register" /><br />		
	</form>
          </center>
<?php
	}
	else if(loggedin())
	{
		echo 'You\'re already registered and logged in';
	}
?>