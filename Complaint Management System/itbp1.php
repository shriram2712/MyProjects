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
require 'connect.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo3");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_POST['id']);
$username= mysqli_real_escape_string($link, $_POST['username']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$comment = mysqli_real_escape_string($link, $_POST['comment']);

$dept = mysqli_real_escape_string($link, $_POST['dept']);

$sql = "SELECT * FROM complaint1_3 where id=$id";
$result = $link->query($sql);
$sql2 ="SELECT * FROM complaint1_2 where id=$id";
$result2=$link->query($sql2);
 $sql3 = "SELECT * FROM complaint1_1 where id=$id";
$result3 = $link->query($sql3);
 $sql4= "SELECT * FROM complaint2_3 where id=$id";
$result4 = $link->query($sql4);
$sql5 ="SELECT * FROM complaint2_2 where id=$id";
$result5=$link->query($sql5);
 $sql6 = "SELECT * FROM complaint2_1 where id=$id";
$result6 = $link->query($sql6);
 $sql7 = "SELECT * FROM complaint3_3 where id=$id";
$result7 = $link->query($sql7);
$sql8 ="SELECT * FROM complaint3_2 where id=$id";
$result8=$link->query($sql8);
 $sql9 = "SELECT * FROM complaint3_1 where id=$id";
$result9 = $link->query($sql9);
 $sql10 = "SELECT * FROM del3 where id=$id";
$result10 = $link->query($sql10);
$sql11 ="SELECT * FROM del2 where id=$id";
$result11=$link->query($sql11);
 $sql12 = "SELECT * FROM del1 where id=$id";
$result12 = $link->query($sql12);
$sql13 ="SELECT * FROM acc where id=$id";
$result13=$link->query($sql13);
if($result->num_rows > 0 || $result2->num_rows > 0 || $result3->num_rows > 0 || $result4->num_rows > 0 || $result5->num_rows > 0 || $result6->num_rows > 0 || $result7->num_rows > 0 || $result8->num_rows > 0 || $result9->num_rows > 0 || $result10->num_rows > 0 || $result11->num_rows > 0 || $result12->num_rows > 0 || $result13->num_rows > 0)
{
	echo 'Your complaint is already registered with us. U can not register a new complaint now';
}
else
{
					$query = "SELECT username FROM users WHERE username = '$username' AND id = '$id'";
					$query_run = mysqli_query($conn,$query);
					$query_num_rows = mysqli_num_rows($query_run);
					if($query_num_rows == 1)
					{
switch($dept) {
case 'pwd':          
// attempt insert query execution
$sql = "INSERT INTO complaint1_3(id, username, email, comment) VALUES ('$id', '$username', '$email', '$comment')";
if(mysqli_query($link, $sql)){
    echo '<h4 style="text-align:center">Your complaint has been successfully passed to desk 3 of public works department<br> You can check the status of your complaint when ever you need<br> Read the rules for further information<br></h4>';
} else{
    echo "<h2>ERROR: Slight issue in the server_ Will be corrected shortly<br> Sorry for the inconvenience<br> " . mysqli_error($link);
}
break;
case 'ed':          
// attempt insert query execution
$sql = "INSERT INTO complaint2_3(id, username, email, comment) VALUES ('$id', '$username', '$email', '$comment')";
if(mysqli_query($link, $sql)){
    echo '<h4 style="text-align:center">Your complaint has been successfully passed to desk 3 of Environment department<br> You can check the status of your complaint when ever you need<br> Read the rules for further information</h4>';
} else{
    echo '<h2 style="text:align">ERROR: Slight issue in the server_ Will be corrected shortly<br> Sorry for the inconvenience<br> ' . mysqli_error($link);
}
break;
case 'hd':          
// attempt insert query execution
$sql = "INSERT INTO complaint3_3(id, username, email, comment) VALUES ('$id', '$username', '$email', '$comment')";
if(mysqli_query($link, $sql)){
    echo '<h4 style="text-align:center">Your complaint has been successfully passed to desk 3 of health department<br> You can check the status of your complaint when ever you need<br> Read the rules for further information<br></h4>';
} else{
    echo '<h4>ERROR: Slight issue in the server. Will be corrected shortly<br> Sorry for the inconvenience<br> ' . mysqli_error($link);
}
break;


default :
	echo 'pwd is not selected'; 
}
}
else 
{
echo "<h4 style='text-align:center'>Enter a valid username and id to register a complaint</h4>";
echo '<form action="complaint1.php" method="post"><center><input type="submit" name="submit" value="Go Back"></form>';
}
}
  // close connection
mysqli_close($link);
?>
