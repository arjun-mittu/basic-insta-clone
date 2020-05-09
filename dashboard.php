<?php session_start(); ?>
<html>
	<head>
		<title></title>
		<style>
	
			body
			{
				background-image:url(800px_COLOURBOX18679293.jpg);
			}
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
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
							
							$sql = "select p.*,s.full_name,s.photo from post p,signup s, followers f where ((p.user_id=s.id and f.following=s.id and f.followers='".$_SESSION['user_id']."') or (p.user_id=s.id and f.followers=s.id and s.id='".$_SESSION['user_id']."')) group by p.id order by created desc";
							
							$result = mysqli_query($conn,$sql);
							
							
							
							while($rec = mysqli_fetch_assoc($result)):
						?>
								
					<div class="container" style="width:800px;background:#fff;border-radius:10px;">
								<div style="">
									<p style="text-align:left;">
										<img src='photos/<?php echo $rec['photo'];?>' width='50' height='50'style="border-radius:50%;"> <b style="padding-right:480px;padding-left:5px;"><?php echo $rec['full_name'];?></b>  <?php echo $rec['created'];?> 
									</p>
									<hr style="color:#DDD8D9;height:3px;">
									<p style="font-size:20px;">
										<?php echo $rec['caption'];?>
									</p>
									
									<img src='uploads/<?php echo $rec['banner'];?>' style="width:100%;max-height:400px;border:2px solid #000;">
									

								</div>
								<div>
									
									<br>
									<form action="savecomment.php" method="get">
										<table border="0">
											<tr>
												<td>
													<?php $sqll="select * from likes where user_id='".$_SESSION['user_id']."' and post_id='".$rec['id']."'";
													$rsl=mysqli_query($conn,$sqll);
													$recl=mysqli_fetch_assoc($rsl);
													if($recl['user_id']!="")
													{ ?>
													<a href="unlike.php?post_id=<?php echo $rec['id']; ?>">
													
														<i class="fa fa-star" style="font-size:24px;color:#EEDE1C"></i>
													</a>
													<?php }else { ?>
													<a href="like.php?post_id=<?php echo $rec['id']; ?>">
													
														<i class="fa fa-star-o" style="font-size:24px;color:#EEDE1C"></i>
													</a>
													<?php } ?>
													<br>
													<?php
													$sqllc="select count(*) as nofl from likes where post_id='".$rec['id']."'";
													$rslc=mysqli_query($conn,$sqllc);
													$reclc=mysqli_fetch_assoc($rslc);
													echo $reclc['nofl'];
													
													?>
												</td>
												<td style="padding-left:30px;">
													<input type="hidden" name="post_id" value="<?php echo $rec['id']; ?>">
													<textarea name="comment" placeholder="comment..." style="border-radius:5px;"></textarea>
												</td>
											</tr>
											<tr>
												<td colspan="2" style="padding-top:20px;"><input type="submit" value="post" style="width:240px;border-radius:5px;background:#F2E3E6"></td>
											</tr>
										
										</table>
									</form>
									<hr style="color:#DDD8D9;height:3px;">
									
									<div align="left">
									<?php
										$sqlc="select * from comments c,signup s where c.user_id=s.id and post_id='".$rec['id']."'";
										$rsc=mysqli_query($conn,$sqlc);
										while($recc=mysqli_fetch_assoc($rsc))
										{
											echo "<img src='photos/".$recc['photo']."' width='40'><b>".$recc['full_name']."</b>: ".$recc['comments']."<br>";
										}
									?>
									</div>
									
								</div>
						
					</div>
					<br>
					<?php endwhile;?>	
						
					
	</body>
</html>