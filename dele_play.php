<?php
	session_start();
	@$i=$_SESSION['id'];
	@$s1=$_GET['s'];
	
	function fun($msg)
	{
		echo "<script>alert('$msg')</script>";
	}
	@$conn=@mysqli_connect("localhost","root","","db_project");
    	@$del="DELETE FROM tb_play WHERE uid='$i'AND song_name='$s1'";
    	@$result=@mysqli_query($conn,$del); 
	if($result)	
	{
		header("location:disp_play.php");
	 } 
	else
	{
		echo "Failed";
	}
?>