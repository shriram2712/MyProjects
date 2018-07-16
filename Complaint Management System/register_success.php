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

<center>You've registered</center>
<h2 style="text-align:center">Click here to get your user id</h2>

<?php 
        require 'core.php';
	require 'connect.php';
	
		if(isset($_POST['username']))
		{
			$username = $_POST['username'];
                        if(!empty($username))
			{
				$sql = "SELECT * FROM users WHERE username = '$username'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
    					// output data of each row
    					while($row = $result->fetch_assoc()) {
        					echo "<center><b>User id: " . $row["id"]."</center><br></b>";
					}
				}
			}
			else
				echo "<center>Enter the user name<center>";
                 }
     	
?>
<form action = "register_success.php" method = "POST">
              <center>
		<br><br>Username : <input type = "text" name = "username" value = "<?php echo @$username;?>"/><br />
	<br />
		<br><input type = "submit" value = "Get Id" /><br />		
	</form>
          </center>
<a href="loginform.php">Go Back</a>
