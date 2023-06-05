<?php
	 session_start();
    @$mail=$_POST['txtemail'];
    @$pass=$_POST['txtpass'];

    @$conn=@mysqli_connect("localhost","root","","db_project");
    @$ins="SELECT * FROM tb_users WHERE email='$mail' AND password='$pass'";
    @$result=@mysqli_query($conn,$ins);
    @$value=@mysqli_fetch_array($result);
	if($value['user_id']>0)
    	{
		$_SESSION['id']=$value['user_id'];
        	$_SESSION['m']=$mail;
        	$_SESSION['p']=$pass;
        	
		header("location:home.php");
       }
	else
	{
		echo "<h2>No Account Found</h2>";
	}
?>