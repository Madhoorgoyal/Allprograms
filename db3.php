	<?php

	$conn=mysqli_connect("localhost","root","","student");
	if(!$conn)
	{
	echo("Connection failed ");
	}
	echo "<br> Connected to database<br>";

	$name=$_POST["name"];
	$class=$_POST["classs"];
	$rollno=$_POST["rolll"];
	$pass=$_POST["pass"];
	$pass2=$_POST["pass2"];






	$sql="insert into maintable values('','$name','$class','$rollno','$pass','$pass2',now())";


	if(mysqli_query($conn,$sql)){
		
				echo "<script>window.alert('Account created')</script>";
				echo "<script>window.open('index.html')</script>";

		
	}
	else
	{
		
	die("Connection failed: " . mysqli_connect_error());
	}


	mysqli_close($conn);
	?>