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

<h2 style="text-align:center">Registration Form</h2>
<p><span class="error"><center>* required field.</span></center></p>
<form method="post" action="itbp1.php" onsubmit="return validateForm1()"  name="form1">  
  <center>UserName: <input type="text" name="username" value="<?php echo $username;?>">&nbsp&nbsp *
  
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">&nbsp&nbsp *
   <br><br>
 
  User Id <input type="text" name="id" value="<?php echo $id;?>">&nbsp&nbsp *
  <br><br>
   
  Details: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>&nbsp&nbsp *<br><br>
  Department:
  <input type="radio" name="dept" <?php if (isset($dept) && $dept=="pwd") echo "checked";?> value="pwd">Public Works Department<br>&nbsp&nbsp *
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="radio" name="dept" <?php if (isset($dept) && $dept=="ed") echo "checked";?> value="ed"> Environmental Department<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="radio" name="dept" <?php if (isset($dept) && $dept=="hd") echo "checked";?> value="hd">Health Department

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</center>
</form>

<script>
function validateForm1() {
    var x = document.forms["form1"]["username"].value;
var reg=/^[a-zA-Z0-9 ]*$/.test(x);
var y= document.forms["form1"]["email"].value;
var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
var z= document.forms["form1"]["id"].value;
var reg1=/^[0-9]*$/.test(z);
var v=document.forms["form1"]["comment"].value;
var u=document.forms["form1"]["dept"].value;
if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	else if(!reg){
         alert("No special characters in name");
        return false;
    }
 
  else if(y == "") {
        alert("Email must be filled out");
        return false;
    }
	
    
    else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Not a valid e-mail address");
        return false;
    }    else if (z == "") {
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
       else if (v == "") {
        alert("Complaint details must be mentioned");
        return false;
    }
else if (u == "") {
        alert("One of the department must be selected");
        return false;
    }
    else
{return true;}

}
</script>

