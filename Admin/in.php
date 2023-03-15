<?php
	include('connect.php');
 
	$username=$_POST['username'];
	$password=$_POST['password'];
         
	 
 
	mysqli_query($conn,"insert into `adminlogin`(username,password) values ('','$username','$password')");
	header('location:pass.php');