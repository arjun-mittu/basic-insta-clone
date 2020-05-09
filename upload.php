			<html>
			<head>
				<style>
					body
					{
						background-image:url(800px_COLOURBOX18679293.jpg);
					}
				</style>
		</head>
		<body>
<?php include('common/header.php'); ?>
<?php
	include('common/connection.php');
	session_start();
	$string = @$_GET['string'];
	
	if($string=="nu"){
		echo "<h3 style='text-align:center;font-family:arial;background:#eee;'>Upload Failed.Please Try Again.</h3>";
	}
	
	//echo $_SESSION['user_id'];
?>
		<link rel="stylesheet" href="css/style.css">
			<div style="padding-top:50px">
				<div class="container" style="background:white;">
					<form action="saveupload.php" method="post" enctype="multipart/form-data">
					<center>
						<div style="padding-top:50px;padding-bottom:50px;">
							<table style="padding-top:10px;" cellpadding="5">
								<tr>
									<td style="padding-right:30px;"><b>Upload Picture : </b></td>
									<td><input type="file" name="banner"></td>
								</tr>
								<tr>
									<td><b>Caption : </b></td>
									<td><textarea name="caption" width="300" height="200"></textarea></td>
								</tr>
								<tr>
									
									<td colspan="2"><input type="submit"  value="submit"style="height:30px;text-align:center;width:390px;border:solid #DBDEE4 1px;border-radius:5px;"></td>
								</tr>
							</table>
						</div>
					</center>	
					</form>
				</div>
			</div>
		</body>
	</html>