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
// define variables and set to empty values
$username = $email = $dept = $comment = $id = "";
?>

<h2 style="text-align:center">Check Status</h2>
<p><span class="error"><center>* required field.</span></center></p><br>
<form method="post" action="a.php" onsubmit="return validateForm1()"  name="form1">  
  <center>UserName: <input type="text" name="username" value="<?php echo $username;?>">&nbsp&nbsp *
  
  <br><br><br>
 
 
  User Id <input type="text" name="id" value="<?php echo $id;?>">&nbsp&nbsp *
  <br><br><br>
   
    <input type="submit" name="submit" value="Submit">  
</center>
</form>

<script>
function validateForm1() {
    var x = document.forms["form1"]["username"].value;
var reg=/^[a-zA-Z0-9 ]*$/.test(x);
var z= document.forms["form1"]["id"].value;
var reg1=/^[0-9]*$/.test(z);
if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	else if(!reg){
         alert("No special characters in name");
        return false;
    }
 
      else if (z == "") {
        alert("User Id must be filled out");
        return false;
    }

	else if(z=="")
{
alert("User Id must be filled out");
return false;
}
    else if(!reg1){
         alert("Only numbers in User Id");
        return false;
    }
      
    else
{return true;}

}
</script>

