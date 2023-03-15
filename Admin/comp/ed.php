<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `comp` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<style>

 

 

body{
	margin: 0;
	padding: 0;
	 
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom,   #cb6c62,  #a54136,  #682922);
}


a:link {
  color: #800000;
  background-color: transparent;
  text-decoration: none;
}
</style>
</head>
<body>
	<h2 align="center">Edit Details</h2>
  
	<form method="POST" action="up.php?id=<?php echo $id; ?>">&nbsp &nbsp &nbsp
     
		<label>Pc No.:&nbsp &nbsp</label><input type="text" value="<?php echo $row['pc']; ?>" name="pc">&nbsp &nbsp &nbsp
        
		<label>Name:&nbsp &nbsp</label><input type="text" value="<?php echo $row['name']; ?>" name="name">&nbsp &nbsp &nbsp
         
		<label>Model:&nbsp &nbsp</label><input type="text" value="<?php echo $row['model']; ?>" name="model">&nbsp &nbsp &nbsp
        
		 &nbsp &nbsp &nbsp<input type="submit" name="submit">
         
		&nbsp &nbsp &nbsp &nbsp <a href="addcomp.php">Back</a>
	</form>
</body>
</html>