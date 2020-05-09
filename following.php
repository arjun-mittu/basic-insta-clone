<?php session_start(); ?>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
			<?php include('common/connection.php');?>
			<?php include('common/header.php'); ?>
			<link rel="stylesheet" href="css/style.css">
			<?php 
			
			 
			
			$sql = "select s.*, f.followers, f.following  from signup s, followers f where followers=s.id and  following='".$_SESSION['user_id']."'"; 
							
			$result = mysqli_query($conn,$sql);
			while($rec = mysqli_fetch_assoc($result))
			{
			?>
		<div class="container">
		<p style="text-align:left;">
			<div class="row">
				<div class="col-6" align="left">
					<img align="left"  src='photos/<?php echo $rec['photo'];?>' width='50' height='50'style="border-radius:50%;margin-right:10px;"> 
					<b style="">
					<?php echo $rec['full_name'];?></b>
					<br>
					 <?php echo $rec['user_name'];?>
				</div>
				<div class="col-6">
				<?php $sqll="select * from followers where following='".$_SESSION['user_id']."' and followers='".$rec['id']."'";
					$rsl=mysqli_query($conn,$sqll);
					$recl=mysqli_fetch_assoc($rsl);
					if($recl['followers']!="")
					{ ?>
					<a href="unfollow.php?following_id=<?php echo $rec['id']; ?>">Unfollow</a>
					<?php }else{ ?>
					<a href="followsave.php?following_id=<?php echo $rec['id']; ?>">Follow</a>
					<?php } ?>
				</div>
			</div>
		</p>
	
		</div>
			<?php } ?>
	</body>
</html>