
<html>
	<head>
		<title>
			User Panel
		</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
			.header
			{
				
				
				background:#EFD1F8;
				color:black;
				font-size:30px;
			}
		</style>
			<meta name="viewport" content="width=device-width, initial-scale=1">
						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
						
	</head>
	<body>
		<div class="header" style="padding-top:8px; border-bottom:solid black 2px;">
			<div style="padding-bottom:10px;padding-top:5px;">
			<form action="search.php">
				<a href="upload.php" style="text-decoration:none;">
					<i class="glyphicon glyphicon-camera" style="padding-left:90px;padding-right:50px; border-right: solid grey 2px;"></i>
				</a>
					<a href="dashboard.php" style="text-decoration:none; color:black;">
						<b style="padding-right:120px;font-family:Lucida Handwriting;">photo-book</b>
					</a>
					
						<input style="font-size:20px;text-align:center;" value="<?php echo @$_GET['search']; ?>" type="text" name="search" placeholder="search">
					
					<a href="mypost.php" style="text-decoration:none;">
					<i class="fa fa-compass" style="padding-left:100px;padding-right:10px;"></i>
					</a>
					<a href="edit.php" style="text-decoration:none;">
					<i class="glyphicon glyphicon-user" style="padding-left:100px;padding-right:10px;"></i>
					</a>
					<a href="follow.php" style="text-decoration:none;">
					<i class="glyphicon glyphicon-heart" style="padding-left:100px;padding-right:10px;"></i>
					</a>
					<a href="logout.php" style="text-decoration:none;">
					<i class="fa fa-power-off" style="padding-left:100px; font-size:30px;"></i>
					</a>
				
				</form>			
			</div>
			
		</div>
	</body>
</html>
