<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$pno=$_POST['pno'];
	$proff=$_POST['proff'];
	$pc=$_POST['pc'];
 
	mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname', pno='$pno', proff='$proff', pc='$pc' where userid='$id'");
	header('location:addcust.php');
?>