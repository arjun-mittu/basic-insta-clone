<?php
	include('common/connection.php');
	session_start();
	$user_id = $_SESSION['user_id'];
	//echo $user_id;
	$caption = $_POST['caption'];
	$banner = $_FILES['banner']['name'];
	
	//echo "<pre>";
			//print_r($_FILES['banner']);
	//secho "</pre>";
	$sql = "insert into post(caption,user_id,created)values('$caption','$user_id',now())";
	if(mysqli_query($conn,$sql)){
		
		$tmpname = $_FILES['banner']['tmp_name'];
		$ext = explode('.',$banner);
		$ext = '.'.end($ext);
		
		$newname = 'upload'.time().$ext;
		//echo $newname;
		$destination = 'uploads/'.$newname;
		$last_id=mysqli_insert_id($conn);
		if(move_uploaded_file($tmpname,$destination)){
			$sql = "update post set banner='$newname' where id='$last_id'";
			mysqli_query($conn,$sql);
		}
		header('location:dashboard.php');			
	}else{
		header('location:upload.php?string=nu');
	}

?>