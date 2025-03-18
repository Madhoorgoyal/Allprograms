	<?php
session_start();
	$conn=mysqli_connect("localhost","root","","student");
	if(!$conn)
	{
		echo("Connection failed ");
	}

	$id=$_POST["id"];
	$name=$_POST["name"];
	$pass=$_POST["pass"];


$sql = "SELECT * FROM admin WHERE ID='$id' AND NAME='$name' AND PASSWORD='$pass'";

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if($count>0){
		
				//echo "<script>window.alert('Login successfully')</script>";
			//	echo "<script>var mywinw=window.open('frameset/index.html')</script>";
				//echo "<script>window.open('frameset/index.html')</script>";
				
				  echo "<script>
				  localStorage.setItem('loggedIn', 'true');
            alert('Login successfully');
            //window.location.replace('frameset/');
           window.location.replace('admin2.php');
		  </script>";
		
		

		
	}
	else
	{
		
				/*echo "<script>window.alert('Login failed')</script>";
				
				echo "<script>window.open('index2.html')</script>";*/
				
				   echo "<script>
            alert('Login failed');
         //   window.location.replace('admin2.html');
             window.location.href = 'admin2.html';
		  </script>";
	}
	


	mysqli_close($conn);
	?>