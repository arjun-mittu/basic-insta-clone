 <html>
	<head>
		<title>
			user
		</title>
		<link rel="stylesheet" href="css/style.css">
		<?php include('common/connection.php'); 
		session_start();
		@$id = $_SESSION['user_id'];
		$sql = "select * from signup where id='$id'";
		$rs = mysqli_query($conn,$sql);
		$rec = mysqli_fetch_assoc($rs);
			?>
			
		<style>
				body
					{
						background-image:url(800px_COLOURBOX18679293.jpg);
					}
				img
				{
					border-radius:40%;
				}
				.anchor a
				{
				
					text-decoration:underline;
				}
				.anchor a:hover
				
				{
					color:#DADBDC;
				}
		</style>
	</head>
	
	<body>
		<?php include('common/header.php'); ?>
			<div style="padding-top:50px;">
				
				<div class="container" style="background:white;">
		
					<div class="row " style="padding-bottom:50px;">
				
			
						<div class="col-4">
							<b>
								<div class="anchor" style="padding-bottom:20px;border-right:solid grey 1px;width:300px;">
											<a style=" color:black;font-family:Ravie;font-size:20px;" href="edit.php">EDIT PROFILE</a>
								</div>			
								<div class="anchor" style="padding-bottom:20px; padding-top:20px; border-right:solid grey 1px;width:300px">		
										<br>
											<a style=" color:black;font-family:Ravie;font-size:20px;" href="change-password.php">CHANGE PASSWORD</a>
							    </div>
							</b>
						</div>
						<div class="col-5">
							<form method="post" action="editsave.php" onsubmit="return validation();">
							<table border="0" cellpadding="3" cellspacing="7" style="padding-left:4px;">
													<tr style="padding-top:10px;">
														<td>NAME</td>
														<td><input type="text" id="full_name" value="<?php echo $rec['full_name']; ?>" name="full_name" style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
													</tr>	
													
													<tr>
														<td>USER NAME</td>
														<td><input type ="text" id="user_name" value="<?php echo $rec['user_name']; ?>" name="user_name"style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
													</tr>
													
													<tr>
													<td> E-MAIL</td>
														
														<td><input type="text" id="email" name="email" value="<?php echo $rec['email']; ?>" style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
													</tr>
													
													<tr>
														<td>PHONE NUMBER</td>
														<td><input type="number" value="<?php echo $rec['phone']; ?>" name="phone" style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
													</tr>
													
													<tr>
													
														<td>GENDER</td>
														<td>
															<input type="radio" name="gender" <?php if($rec['gender']=='Male'){echo "checked";} ?> value="Male" > Male
															<input type="radio" name="gender" <?php if($rec['gender']=='Female'){echo "checked";} ?> value="Female"> Female
															
														</td>
														
													</tr>
													<tr> 
														<td colspan="2"><input type="submit"  value="submit"style="height:30px;text-align:center;width:400px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
													</tr>
							</table>
								
							</form>	
								
						</div>
						<div class="col-3">
							<img src="photos/<?php echo $rec['photo']; ?>" height="100" width="100">
							<div>
							<a href="editpp.php">Edit</a>
							<br>
							<br>
							<br>
							<div>
							</div>
							<a href="follow.php">FOLLOWRES</a>
							<a href="following.php" style="padding-left:20px;">FOLLOWING</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<script>
			function validation()
			{
				if(document.getElementById("full_name").value=="")
				{
					alert("Enter Full Name");
					return false;
				}
				if(document.getElementById("user_name").value=="")
				{
					alert("Enter user Name");
					return false;
				}
				if(document.getElementById("email").value=="")
				{
					alert("enter email id");
					return false;
				}
				var len=document.getElementById("full_name").value.length;
				if(len<6)
				{
					alert("Name should be greater than 6 char");
					return false;
				}
			}
		</script>
	
	</body>
</html>