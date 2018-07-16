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

<form method="post" action="c.php">
<?php require 'connect.php';
        require 'core.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo3");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
					
$id = mysqli_real_escape_string($link, $_POST['id']);
$username = mysqli_real_escape_string($link, $_POST['username']);
$ss = "SELECT * FROM users where id = '$id' AND username = '$username'";
 $query_run = mysqli_query($conn,$ss);
 $query_num_rows = mysqli_num_rows($query_run);

 if ($query_num_rows == 1) {


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

if ($result->num_rows > 0) {
    // output data of each row
        echo "<h4 style='text-align:center'>Your Complaint is in desk 3</h4>";

} 
else if ($result2->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Complaint is in desk 2</h4>";
            
}
else if ($result3->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Complaint is in desk 1</h4>";
            
}
else if ($result4->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Your Complaint is in desk 3</h4>";
            }

else if ($result5->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Complaint is in desk 2</h4>";
            }

else if ($result6->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Complaint is in desk 1</h4>";
            }

else if ($result7->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Your Complaint is in desk 3</h4>";
            }
 
else if ($result8->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Complaint is in desk 2</h4>";
            }

else if ($result9->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Complaint is in desk 1</h4>";
            }

else if ($result10->num_rows > 0) {
    // output data of each row
        echo "<h4 style='text-align:center'>Your Complaint was rejected in desk 3</h4><br><br>";
	$sq = "DELETE  FROM del3 where id=$id";
	$q_ru=mysqli_query($link,$sq);
            // output data of each row
        echo "<h4 style='text-align:center'>Your Complaint has been deleted.</h4><br><br>";
	} 
else if ($result11->num_rows > 0) {
    // output data of each row
        echo "<h4 style='text-align:center'>Complaint was rejected in desk 2</h4><br><br>";
        $sq = "DELETE FROM del2 where id=$id";
	$q_ru=mysqli_query($link,$sq);
        // output data of each row
        echo "<h4 style='text-align:center'>Your Complaint has been deleted</h4><br><br>";
	}
else if ($result12->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Complaint was rejected in desk 1</h4><br><br>";
        $sq = "DELETE FROM del1 where id=$id";
        $q_ru=mysqli_query($link,$sq);
    // output data of each row
        echo "<h4 style='text-align:center'>Your Complaint has been deleted</h4>";
	
	
}
else if ($result13->num_rows > 0) {
    // output data of each row
    
        echo "<h4 style='text-align:center'>Complaint is approved <br>Officers will arrive within 24 hrs</h4><br><br>";
        $sq = "DELETE  FROM acc where id=$id";
	$q_ru=mysqli_query($link,$sq);
    // output data of each row
        echo "<h4 style='text-align:center'>You can register a new complaint if you want</h4>";
	}
	
else {
    echo "<<h4 style='text-align:center'>No such complaint";
}

 
}
 else
 {
	 echo " <h4 style='text-align:center'>Invalid id and username combination";
 }
  // close connection
mysqli_close($link);
?><br><br>
<center><input type="submit" name="submit1" value="Go Back">

