<?php
	include('common/connection.php');
	
	$id =$_GET['id'];
	
	$sql = "delete from post where id ='$id'";
	if(mysqli_query($conn,$sql)){
		header('location:mypost.php');			
	}else{
		header('location:mypost.php?string=nu');
	}

?>