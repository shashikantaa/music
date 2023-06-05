<?php
	session_start();

	@$a1=$_GET['a'];
	@$l1=$_GET['l'];
	@$s1=$_GET['s']; 
	
	$i=$_SESSION['id'];
	@$conn=@mysqli_connect("localhost","root","","db_project");
	@$ins="insert into tb_play(uid,song_name,artist_id,loc) values($i,'$s1',$a1,'$l1')";
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
   	
   	
	//header("location:home_page.php");
?>