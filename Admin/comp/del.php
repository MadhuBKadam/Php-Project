<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `comp` where id='$id'");
	header('location:addcomp.php');
?>