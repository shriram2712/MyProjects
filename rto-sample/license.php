<?php

	
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: gray;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: white;
}

.vertical-menu a.active {
    background-color: gray;
    color: white;
}
</style>
<style>
  .block {
		padding: 20px;
		color:black;
		;
		background: white;
		}
	.adjust {
			position:absolute;
			top:78%;
			left:40%;
			transform:translate(-40%,-55%);
		
	
	
	
			}

</style>


<style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}

input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>



<title>
License
</title>
</head>
<body>
<table>
<col width="80">
<col width="*">
<tr>
<td><img src="1.jpg"></td>
<td><h1 style='text-align:center'>REGIONAL TRANSPORT OFFICE </h1><br>
<h2 style='text-align:center'> AN INITIATIVE BY INDIAN GOVERNMENT</H2><td>
</tr></table>

<ul>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">HOME</a>
    <div class="dropdown-content">
      
    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">LICENSE</a>
    <div class="dropdown-content">
      
	</div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">VEHICLE REGISTRATION</a>
    <div class="dropdown-content">
    
	</div>
  </li>
  <li><a href="https://www.healthkart.com/connect/?itracker=w:header|home|;p:5|;c:healthkart|;">Connect</a></li>
     <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DRIVING SCHOOLS</a>
    <div class="dropdown-content">
      
	</div>
  </li>
  
     <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">USERNAME</a>
    <div class="dropdown-content">
      
	</div>
  </li>
  
     <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">LOGOUT</a>
    <div class="dropdown-content">
      
	</div>
  </li>
</ul>


<div class="vertical-menu">
  
  <a href="#">RULES</a>
  <a href="#">DOCUMENTS<BR>REQUIRED</a>
  <a href="#">CONTACT US</a>
  <a href="#">FEEDBACK</a>
<a href="#">STATUS</a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
</div>
<div class="block adjust">
<table >
<tr><center>APPLICATION FOR LICENSE</CENTER></TR><TABLE>
<table>
<col width="1300">
<tr>
<td WIDTH="60%">
<h3>*TYPE OF LICENSE</H3><BR>
<OL>
<LI>LEARNING LICENSE</LI><BR>
<LI>PERMENANT LICENSE</LI><BR>
<LI>RENEWAL</LI></UL><BR>
<BR>
<FORM action="license.php" method="post" enctype="multiport/form-data">
NAME:<BR><INPUT TYPE="TEXT" name="NAME"/><BR>
ADDRESS:<BR><INPUT TYPE="TEXT" name="ADDRESS"/><BR>
AGE:<BR><INPUT TYPE="TEXT" name="AGE"/><BR>
GENDER:(Male/FEMALE/TG)<BR>
<INPUT TYPE="TEXT" name="GENDER"/> <br>
DOB:<BR><INPUT TYPE="TEXT" name="DOB"/><BR>

</TD>
<TD>

<input type="submit" name="submit" value="Insert"></form>


<?php
	$con = mysqli_connect('localhost' , 'root' , '');
	if(!$con)
	{
		echo 'not connected';
	}
	
	if(!mysqli_select_db($con,'rto'))
	{
		echo 'not selectedd';
	}
	
	if(isset($_POST['NAME']) && isset($_POST['ADDRESS']) && isset($_POST['AGE']) && isset($_POST['GENDER']) && isset($_POST['DOB']) )
	{		
	$name = $_POST['NAME'];
	$address = $_POST['ADDRESS'];
	$age= $_POST['AGE'];
	$gender= $_POST['GENDER'];
	$dob= $_POST['DOB'];
	$sql = "INSERT INTO sample (name,address,age,gender,dob) VALUES ('$name','$address','$age','$gender','$dob')";
	if(!mysqli_query($con,$sql))
	{
		echo 'not inserted';
	}
	else
	{
		$sql1 = "SELECT * FROM sample WHERE name = '$name' ";
		$result = $con->query($sql1);
		if($result->num_rows > 0)
		{
		while($row = $result->fetch_assoc()) {
			echo "APP_NO: " . $row["id"]. "<br>";
			}
		}
else
	{
    echo "0 results";
	}
	}
	}
	else
	{
		echo "Please enter all the details";
	}
	
	
		
//header("refresh:2; url=license.php");
?>
</TD>
</TR>
</TABLE>  
</div>

</div>
</body>

</html>
