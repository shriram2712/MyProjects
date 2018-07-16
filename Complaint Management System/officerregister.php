<?php
	require 'officercore.php';
	require 'connect.php';
	if(!loggedin())
	{
		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['department']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_again = $_POST['password_again'];
			$password_hash = md5($password);
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$department = $_POST['department'];
			if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($lastname) && !empty($department))
			{
				if($password != $password_again)
				{
					echo 'Passwords do not match';
				}
				else
				{
					$query = "SELECT username FROM officers WHERE username = '$username'";
					$query_run = mysqli_query($conn,$query);
					$query_num_rows = mysqli_num_rows($query_run);
					if($query_num_rows == 1)
					{
						echo 'The username ' . $username .' already exists.';
					}				
					else
					{
						$query = "INSERT INTO officers VALUES('','".mysqli_real_escape_string($conn,$username)."','".mysqli_real_escape_string($conn,$password_hash)."','".mysqli_real_escape_string($conn,$firstname)."','".mysqli_real_escape_string($conn,$lastname)."','".mysqli_real_escape_string($conn,$department)."')";
						if($query_run = mysqli_query($conn,$query))
						{
							header('Location: officerregister_success.php');	
						}
						else
						{
							echo 'Sorry, we couldn\'t register you at this time. Try again later';
						}
					}
				}
			}
			else
			{
				echo 'All fields are mandatory';
			}
		}		
?>		
	<form action = "officerregister.php" method = "POST">
		<center>Username : <br /><input type = "text" name = "username" value = "<?php echo @$username;?>"/><br /><br />
		Password : <br /><input type = "password" name = "password" /><br /><br />
		Confirm : <br /><input type = "password" name = "password_again" /><br /><br />
		Firstname : <br /><input type = "text" name = "firstname" value = "<?php echo @$firstname;?>"/><br /><br />
		Lastname : <br /><input type = "text" name = "lastname" value = "<?php echo @$lastname;?>"/><br /><br />
		Department : <br /><select name = "department"><option value = "pwd">PWD</option><option value = "ed">ED</option><option value = "hd">HD</option></select><br /><br />
		<input type = "submit" value = "Register" /><br /><br /></center>		
	</form>
<?php
	}
	else if(loggedin())
	{
		echo 'You\'re already registered and logged in';
	}
?>