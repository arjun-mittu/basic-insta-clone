<?php
	include('common/connection.php');
	session_start();
	$user_id = $_SESSION['user_id'];
	//$id =$_POST['id'];
	
	$photo = $_FILES['photo']['name'];
	
		if($photo!="")
		{
			$tmpname = $_FILES['photo']['tmp_name'];
			$ext = explode('.',$photo);
			$ext = '.'.end($ext);
			
			$newname = 'photo'.time().$ext;
			
			$destination = 'photos/'.$newname;
			if(move_uploaded_file($tmpname,$destination)){
				$sql = "update signup set photo='$newname' where id='$user_id'";
				mysqli_query($conn,$sql);
			}
		}
		header('location:edit.php');			

?>