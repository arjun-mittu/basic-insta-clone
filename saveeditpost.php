<?php
	include('common/connection.php');
	session_start();
	$user_id = $_SESSION['user_id'];
	$id =$_POST['id'];
	$caption = $_POST['caption'];
	$banner = $_FILES['banner']['name'];
	//die();
	//echo "<pre>";
			//print_r($_FILES['banner']);
	//secho "</pre>";
	$sql = "update post set caption = '$caption' where id = '$id'";
	if(mysqli_query($conn,$sql)){
		if($banner!="")
		{
			$tmpname = $_FILES['banner']['tmp_name'];
			$ext = explode('.',$banner);
			$ext = '.'.end($ext);
			
			$newname = 'upload'.time().$ext;
			//echo $newname;
			$destination = 'uploads/'.$newname;
			$last_id=mysqli_insert_id($conn);
			if(move_uploaded_file($tmpname,$destination)){
				$sql = "update post set banner='$newname' where id='$id'";
				mysqli_query($conn,$sql);
			}
		}
		header('location:mypost.php');			
	}else{
		header('location:editpost.php?string=nu');
	}

?>