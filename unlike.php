<?php 
session_start();
	include("common/connection.php");
	
	if(!$conn){
		die('Connection Failed');		
	}
	
	$post_id = $_GET['post_id'];
	
	
	$user_id=$_SESSION['user_id'];
	
		$sql="delete from likes where post_id='$post_id' and user_id='$user_id'";
		
		if(mysqli_query($conn,$sql)){
			header('Location:dashboard.php?savedsuccess');	
		}else{
			//header('Location:dashboard.php?notsaved');	
		}
	
?>