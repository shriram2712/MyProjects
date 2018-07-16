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
 <h2 style="text-align:center">Desks and rules</h2>
<h4>There are three main departments in this system - 1.Public works department 2.Environmental department 3.Health Department</h4>
<br><br>
Each department has 3 officers and 3 desks
<br><br> A complaint has to go from desk 3 -> desk 2 -> desk 1 before it will be accepted
<br><br> At each desk the complaint is reviewed and the user can login and check the status anytime he wants to
<br><br> A complaint can be rejected at any desk
<br><br>A user can register 1 complaint at a time
<br><br> If the complaint gets accepted or rejected, the complaint will be automatically deleted and the user can reapply