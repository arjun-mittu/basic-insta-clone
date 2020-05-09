<html>
	<head>
		<title>
		
		</title>
		<style>
			.row
				{
					overflow:hidden;
				}
				.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12
				{
					float:left;
				}
				.col-1
				{
					width:8.33%;
				}
				.col-2
				{
					width:16.66%;
				}
				.col-3
				{
					width:24.99%;
				}
				.col-4
				{
					width:33.32%;
				}
				.col-5
				{
					width:41.65%;
				}
				.col-6
				{
					width:49.98%;
				}
				.col-7
				{
					width:58.31%;
				}
				.col-8
				{
					width:66.64%;
				}
				.col-9
				{
					width:74.97%;
				}
				.col-10
				{
					width:83.3%;
				}
				.col-11
				{
					width:91.63%;
				}
				.col-12
				{
					width:99.96%;
				}
				.container
				{
					width:800px;
					margin:auto;
				}
				body
				{
					background:#FDFCF6;
					
				}
				
				.anchor a
				{
					background:#50B1DC;
					color:white;
					text-decoration:none;
					width:70px;
					padding-left:95px;
					padding-top:5px;
					font-size:20px;
					padding-right:95px;
					padding-bottom:5px;
					border-radius:5px;
				}
				
				.details a
				{
					
					padding-left:40px;
					font-size:13px;
				}
		</style>
	</head>
	<body>
	<?php 
		include('common/connection.php');
		
		$string = @$_GET['al'];
		if($string==1){
			echo "<h4 style='text-align:center;'>User already existed with this username</h4>";	
		}	
	
	?>
	<form method="post" action="save1.php" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<div class="col-7">
					<img src ="ins.png" style="padding-top:60px;">
				</div>
				
				<div class="col-5">
					<div style="background:white;border:solid #E7E5DA 2px;margin-top:20px;margin-bottom:20px;">
						<div style="font-family:arial; font-size:45px;padding-left:18px;padding-top:30px;font-family:Lucida Handwriting;">
							Instagram
						</div>
						<div style="padding-left:90px;padding-top:0px;font-size:20px;color:#A7ABB2;">
							Sign up to see
							
							<br> phtos and videos.
						</div>
						
						<hr style="color:#B8BBC1;width:300px; align:center;">
										<table border="0" cellpadding="3" cellspacing="7" style="padding-left:35px;padding-top:20px;padding-bottom:10px;">
											<tr>
												
												<td><input type="number" placeholder="enter your mobile number" name="phone" style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
											</tr>	
											
											<tr>
												
												<td><input type ="text" placeholder="enter your full name" name="full_name"style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
											</tr>
											
											<tr>
												
												<td><input type ="file" name="photo" style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
											</tr>
											<tr>
												
												<td><input type="text" placeholder="user name" name="user_name" style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
											</tr>
											
											<tr>
												
												<td><input type="password" placeholder="password" name="password"style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
											</tr>
											
											<tr>
												<td class="anchor"><input style="background:blue;margin-left:10px;width:220px;color:white;height:30px;" type="submit" value="Sign up"></td>
												
											
											</table>
							<div>
								<diV style="font-size:12px; color:#919799;padding-left:100px;padding-bottom:20px;">By signing up, you agree to our <br>
																								<b>Terms</b> and <b>Privacy</b> conditions.
								</div>
							</div>
								
								
					</div>
					<div style="background:white;border:solid #E7E5DA 2px;margin-top:20px;">
						<p style="margin-top:25px; margin-left:70px;margin-bottom:25px;">
							Have an account? <a href="login.php" style="text-decoration:none; color:blue;"> login </a>
						</p>
					</div>
					
				</div>
			</div>
		</div>
		
			<div class="container"style="margin-left:200px;">
				<div class="row">
					<div class="col-7 details" style="margin-top:50px;">
						<a href="about.php" style="color:#305184;text-decoration:none;">ABOUT US</a>
						<a href="privacy.php" style="color:#305184;text-decoration:none;">PRIVACY</a>
						<a href="terms.php" style="color:#305184;text-decoration:none;">TERMS</a>
					</div>
					<div class="col-5">
						<P style="padding-left:220px;padding-top:30px;font-size:15px;color:#AAACAE">
							&copy 2017 Instagram
						</p>
					</div>
						
				</div>
			</div>
		
	</form>
	</body>
</html>