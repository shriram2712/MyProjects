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
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo3");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $sql = "SELECT * FROM complaint3_2 LIMIT 1";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo '<form method="post" action="ad8.php">';        
echo "<center><h4 style='text-align:center'>Complaint details</h4><br><b>User id: </b>" . $row["id"]."<br><br>". "  <b>UserName:</b> " . $row["username"]."<br><br>". " <b>Email:</b>" . $row["email"]."<br><br>"."<b>Details of the complaint :</b> </br> ".$row["comment"]. "<br><br>";
echo '<input type="submit" name="submit1" value="Approve"> <input type="submit" name="submit2" value="Reject"></form>';
            
}
} else {
    echo "<h4 style='text-align:center'>You have succesfully reviewed  the complaints<br><br>";
    echo '<form method="post" action="homepage1.php"><input type="submit" name="submit3" value="Go back"></form>';
}
  // close connection
mysqli_close($link);
?>
