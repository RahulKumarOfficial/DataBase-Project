<html>
<body>
<?php
	$conn=new mysqli("localhost","root","","nitte");
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
		
	}
	
	$sql="insert into  signin values('".$_POST["first"]."','".$_POST["last"]."','".$_POST["email"]."','".$_POST["pass"]."');";
	
	if($conn->query($sql)==TRUE){
		echo " PLEASE Sign In here now<br>";
		echo "<a href ='login1.html'>LogIn</a>";
	}
	
	else{
		echo "Error".$sql."<br>".$conn->error;
	}
	?>
	</body>
	</html>