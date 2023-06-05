<?php
	@$e=$_POST['txtemail'];
	@$p=$_POST['txtpass'];

	@$conn=@mysqli_connect("localhost","root","","db_project");
	@$ins="insert into tb_users(email,password) values('$e','$p')";
	@$result=@mysqli_query($conn,$ins);
	if($result)
	{
		echo "Success"; 
		header("location:home.php");
	}
	else
	{
		echo "Failed";
	}

?>