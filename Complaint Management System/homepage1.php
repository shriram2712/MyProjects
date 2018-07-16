<?php

session_start();

	if (!isset($_SESSION['user_id'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: homepage.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: homepage.php");
	}

?>




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
* {box-sizing:border-box}

.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: -30px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: lightblue;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  bottom: -80px
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
img {
    display: block;
    margin: 0 auto;
}



</style>
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
 <h2 style="text-align:center">Departments</h2>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="h_1.jpg" style="width:40%" >
  <div class="text">Public Works Department</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="h_2.png" style="width:40%" >
  <div class="text">Health Department</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="h_3.gif" style="width:40%" >
  <div class="text">Environmental Department</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>
