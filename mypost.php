<?php
	session_start();
?>
<html>
	<head>
		<title></title>
		<style>
	
			body
			{
				background-image:url(800px_COLOURBOX18679293.jpg);
			}
		</style>
	</head>
	<body>
				<?php
				include('common/connection.php');
				
				$string = @$_GET['string'];
				if($string=="nu"){
					echo "<h3 style='text-align:center;font-family:arial;background:#eee;'>Upload Failed.Please Try Again.</h3>";
				}
				?>
				<link rel="stylesheet" href="css/style.css">
					
						
					<?php include('common/header.php'); ?>
					<br>
					<?php 
							//$conn = mysqli_connect('localhost','root','','insta');
							$user_id = $_SESSION['user_id'];
							$sql = "select * from post where user_id='$user_id'";
							
							$result = mysqli_query($conn,$sql);
							
							
							
							while($rec = mysqli_fetch_assoc($result)):
						?>
								
					<div class="container" style="width:800px;background:#fff;">
								<div style="">
									<img src='uploads/<?php echo $rec['banner'];?>' style="width:100%;max-height:400px;border:2px solid #000;">
									<p><?php echo $rec['caption'];?></p>
									<p>
										<a href="editpost.php?id=<?php echo $rec['id'];?>">Edit</a>
										<a href="deletepost.php?id=<?php echo $rec['id'];?>">Delete</a>
									</p>
								</div>
						
					</div>
					<br>
					<?php endwhile;?>	
						
					
	</body>
</html>