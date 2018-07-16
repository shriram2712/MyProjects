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
<form method="post" action="view6.php">
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo3");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 


if (isset($_POST['submit1']))
{
        $sql1 = "INSERT INTO acc select * from complaint2_1 LIMIT 1;";
if(mysqli_query($link, $sql1)){
    echo "<br><br><h4 style='text-align:center'>Complaint accepted</h4>";
} else{
    echo "<br><br><h4 style='text-align:center'>ERROR: Could not able to execute $sql1.</h4> " . mysqli_error($link);
}
 }


if (isset($_POST['submit2']))
{
        $sql1 = "INSERT INTO del1 select * from complaint2_1 LIMIT 1;";
if(mysqli_query($link, $sql1)){
    echo "<h4 style='text-align:center'>Complaint rejected</h4>";
} else{
    echo "<h4 style='text-align:center'>ERROR: Could not able to execute $sql1.</h4> " . mysqli_error($link);
}
 
}


$sql="DELETE FROM complaint2_1 LIMIT 1";
if(mysqli_query($link, $sql)){
echo "<br>";    
echo "<h4 style='text-align:center'>Successful</h4>";
} else{
    echo "<h4 style='text-align:center'>ERROR: Could not able to execute $sql.</h4> " . mysqli_error($link);
}

  // close connection
mysqli_close($link);
?>
<br><br><input type="submit" name="submit" value="Go back">





