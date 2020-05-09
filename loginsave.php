<?php
include("common/connection.php");
session_start();
$username=$_POST['user_name'];
$password=$_POST['password'];

$sql="select * from signup  where user_name='$username' and password='$password'";

$rs=mysqli_query($conn,$sql);

$rec=mysqli_fetch_assoc($rs);

if($rec['user_name']!="")
{
	$_SESSION['user_id'] = $rec['id'];
	$_SESSION['user_name'] = $username;
	header("location: dashboard.php");
	
}
else
{
	$_SESSION['msg']='something went wrong';
	header("location: login.php");
}

?>