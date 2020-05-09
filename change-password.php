<?php session_start(); ?>
<html>
	<head>
		<title>
			user
		</title>
		<link rel="stylesheet" href="css/style.css">
			<style>
				body
					{
						background-image:url(800px_COLOURBOX18679293.jpg);
					}
				a
				{
					text-decoration:none; 
					color:black;
					font-family:Ravie;
					font-size:20px;"
				}
				
					
					

				.anchor a
				{
				
					text-decoration:underline;
				}
				.anchor a:hover
				
				{
					background:#DADBDC;
				}
		</style>
			</style>
	</head>
	<body>
				<?php include('common/header.php'); ?>
	<div style="padding-top:50px;">
				
		<div class="container" style="background:white;">
		
		
			<div class="row" style="padding-bottom:50px;">
				<div class="col-5 ">
							<b>
								<div class="anchor" style="padding-bottom:20px;border-right:solid grey 1px;width:300px;">
											<a style="text-decoration:none; color:black;font-family:Ravie;font-size:20px;" href="edit.php">EDIT PROFILE</a>
								</div>			
								<div class="anchor" style="padding-bottom:20px; padding-top:20px; border-right:solid grey 1px;width:300px">		
										<br>
											<a style="text-decoration:none; color:black;font-family:Ravie;font-size:20px;" href="change-password.php">CHANGE PASSWORD</a>
							    </div>
							</b>
				</div>
				<div class="col-7">
				<?php
					echo @$_SESSION['msg'];
					unset($_SESSION['msg']);
				?>
				<form method="post" action="savepassword.php" onsubmit="return confirmpwd();">
					<table border="0" cellpadding="3" cellspacing="7">
											<tr>
												<td>OLD PASSWORD</td>
												<td><input type ="password"   name="old_password"style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
					 						</tr>
											<tr style="padding-top:10px;">
												<td>NEW PASSWORD</td>
												<td><input type="password" id="np" name="new_password" style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
											</tr>	
											<tr>
											<td> CONFIRM PASSWORD</td>
												
												<td><input type="password" id="cp" style="height:30px;text-align:center;width:250px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
											</tr>
											
											<tr>
												
												<td colspan="2"><input type="submit"  value="submit"style="height:30px;text-align:center;width:460px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
											</tr>
											
											
											</table>
						
						
				</form>
							
				</div>
			
			
			</div>
		
		
		</div>
	</div>
	<script>
	function confirmpwd()
	{
		if(document.getElementById("np").value!=document.getElementById("cp").value)
		{
			alert("password does not match");
			return false;
		}
	}
	</script>
	</body>
</html>