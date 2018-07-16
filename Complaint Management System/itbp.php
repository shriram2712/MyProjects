<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "complaint_management");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE officers(id INT(4) NOT NULL PRIMARY KEY, username CHAR(30) NOT NULL, password CHAR(100) NOT NULL, firstname VARCHAR(500) NOT NULL, lastname VARCHAR(500) NOT NULL) ";
if (mysqli_query($link, $sql)){
    echo "Table complaint created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
