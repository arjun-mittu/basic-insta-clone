<?php session_start();
 if($_SESSION['user_name']==""){ 
	header('location:login.php');
	include('common/beforeheader.php');
 }else{
	 include('common/afterheader.php');
 }
	 
 ?>