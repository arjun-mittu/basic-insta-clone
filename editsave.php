<?php 
session_start();
	include("common/connection.php");
	
	if(!$conn){
		die('Connection Failed');		
	}
	
	$phone = $_POST['phone'];
	$full_name = $_POST['full_name'];
	$user_name = $_POST['user_name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$id=$_SESSION['user_id'];
	
		$sql = "update signup set email='$email',gender='$gender', full_name='$full_name',user_name='$user_name',phone='$phone' where id='$id'";
		
		if(mysqli_query($conn,$sql)){
			header('Location:edit.php?savedsuccess');	
		}else{
			header('Location:edit.php?notsaved');	
		}
	
?>