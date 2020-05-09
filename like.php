<?php 
session_start();
	include("common/connection.php");
	
	if(!$conn){
		die('Connection Failed');		
	}
	
	$post_id = $_GET['post_id'];
	
	
	$user_id=$_SESSION['user_id'];
	
		$sql="insert into likes (post_id,user_id,created)values('$post_id','$user_id',now())";
		
		if(mysqli_query($conn,$sql)){
			header('Location:dashboard.php?savedsuccess');	
		}else{
			//header('Location:dashboard.php?notsaved');	
		}
	
?>