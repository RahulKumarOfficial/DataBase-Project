<html>
<body>
<?php
	$conn=new mysqli("localhost","root","","nitte");
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
		
	}
	$sql="select * from signin where EMAIL='".$_POST["email"]."';";
	$res=$conn->query($sql);
	if($res->num_rows>0){
	echo "welcome USER you are logged in";
	echo "<br><a href ='nmitHome.html'>Go to The NMIT website</a>";
		}
	else{
		echo "you are not logged in";
		echo "<br><a href='login1.html'>GO BACK TO LOGIN</a>";
	}
	?>
	</body>
	</html>