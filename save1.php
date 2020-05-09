<?php 
	include("common/connection.php");
	
	if(!$conn){
		die('Connection Failed');		
	}
	
	$phone = $_POST['phone'];
	$full_name = $_POST['full_name'];
	$user_name = $_POST['user_name'];
	$password= $_POST['password'];
	$photo = $_FILES['photo'];
	$user = "select * from signup where user_name='$user_name'";
	$newuser = mysqli_query($conn,$user);
	
	//if(empty($newuser)){
		$sql = "insert into signup(phone,full_name,user_name,password)values
		('$phone','$full_name','$user_name','$password')";
		/*echo "<pre>";
			print_r(code);
		echo "</pre>";*/
		if(mysqli_query($conn,$sql)){
			if(!empty($photo['name'])){
				$name = $photo['name'];
				$user_id = $conn->insert_id;
				if(move_uploaded_file($photo['tmp_name'],'photos/'.$name)){
					$sql = "update signup set photo = '$name' where id = '$user_id'";
					mysqli_query($conn,$sql);		
					//echo mysqli_error($conn);
				}
			}
			header('Location:add1.php?savedsuccess');	
		}else{
			//echo mysqli_error($conn);
			header('Location:add1.php?notsaved');	
		}
	//}else{
		//header('location:add1.php?al=1');
	//}
?>