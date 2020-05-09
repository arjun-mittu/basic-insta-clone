<?php 
session_start();
	include("common/connection.php");
	
	if(!$conn){
		die('Connection Failed');		
	}
	
	$new_password = $_POST['new_password'];
	$old_password = $_POST['old_password'];
	
	$id=$_SESSION['user_id'];
	
	$sql="select * from signup where password='$old_password' and id='$id'";
	$rs=mysqli_query($conn,$sql);
	$rec=mysqli_fetch_assoc($rs);
	
	if($rec['id']=="")
	{
		$_SESSION['msg']='Current Password not matched! :(';
		header("location: change-password.php");
		
	}
	else{
	
		$sql = "update signup set password='$new_password' where id='$id'";
		
		if(mysqli_query($conn,$sql)){
			$_SESSION['msg']='Password changed successfully! :)';
			header('Location:change-password.php');	
		}else{
			$_SESSION['msg']='Password Not changed! Try again...';
			header('Location:change-password.php');	
		}
	}
?>