<?php 
		session_start();
		include("common/connection.php");
		
		if(!$conn){
			die('Connection Failed');		
		}
		
		$following_id = $_GET['following_id'];
		
		
		$user_id=$_SESSION['user_id'];
		
			$sql="delete from followers where following='$following_id' and followers='$user_id'";
			
			if(mysqli_query($conn,$sql)){
				?>
				<script>history.go(-1);</script>
				<?php
				//header('Location:follow.php?savedsuccess');	
			}else{
				//header('Location:follow.php?notsaved');	
			}
		
	?>