<?php
	session_start();
	$con = mysqli_connect('localhost' , 'root' , '');
	if(!$con)
	{
		echo 'not connected';
	}
	
	if(!mysqli_select_db($con,'rto'))
	{
		echo 'not selectedd';
	}
	
	$name = $_POST['NAME'];
	$address = $_POST['ADDRESS'];
	$age= $_POST['AGE'];
	$gender= $_POST['GENDER'];
	$dob= $_POST['DOB'];
	/*if(isset($_POST['submit']))
	{
		$filename1=$_FILES['Image1']['name'];
		$filetype1=$_FILES['Image1']['type'];
		$filetmp1=$_FILES['Image1']['tmp_name'];
		
		$image1 = move_uploaded_file($filetmp1,"rto/$filename1");
	}
	
	///if(isset($_POST['submit']))
	{
		$filename2=$_FILES['Image2']['name'];
		$filetype2=$_FILES['Image2']['type'];
		$filetmp2=$_FILES['Image2']['tmp_name'];
		
		$image2 = move_uploaded_file($filetmp2,"rto/$filename2");
	}*/
	
	
	
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
	
		
//header("refresh:2; url=license.php");
?>