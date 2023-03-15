 <?php
	include('conn.php');
 
	$pc=$_POST['pc'];
	$name=$_POST['name'];
        $model=$_POST['model'];
	 
 
	mysqli_query($conn,"insert into `comp` (pc,name,model) values ('$pc','$name','$model')");
	header('location:addcomp.php');