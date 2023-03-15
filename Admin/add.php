<?php
	include('conn.php');
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
        $pno=$_POST['pno'];
	$proff=$_POST['proff'];
	$pc=$_POST['pc'];
 
	mysqli_query($conn,"insert into `user` (firstname,lastname,pno,proff,pc) values ('$firstname','$lastname','$pno','$proff','$pc')");
	header('location:addcust.php');