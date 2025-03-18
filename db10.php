	<?php
session_start();
	$conn=mysqli_connect("localhost","root","","student");
	if(!$conn)
	{
		echo("Connection failed ");
	}


	$name=$_POST["name"];
	$pass=$_POST["password"];



	$sql="select * from maintable where name='$name' and password='$pass'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if($count>0){
		
				//echo "<script>window.alert('Login successfully')</script>";
			//	echo "<script>var mywinw=window.open('frameset/index.html')</script>";
				//echo "<script>window.open('frameset/index.html')</script>";
				
				  echo "<script>
            alert('Login successfully');
            window.location.replace('frameset/index.html');
          </script>";
		
		

		
	}
	else
	{
		
				/*echo "<script>window.alert('Login failed')</script>";
				
				echo "<script>window.open('index2.html')</script>";*/
				
				   echo "<script>
            alert('Login failed');
            window.location.replace('index2.html');
          </script>";
	}
	
	 $_SESSION['name'] = $name;

	mysqli_close($conn);
	?>