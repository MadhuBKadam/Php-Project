<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$pc=$_POST['pc'];
	$name=$_POST['name'];
	$model=$_POST['model'];
	 
 
	mysqli_query($conn,"update `comp` set pc='$pc',  name='$name', model='$model' where id='$id'");
	header('location:addcomp.php');
?>