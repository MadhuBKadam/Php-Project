<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit details</title>
<style>
body{
	margin: 0;
	padding: 0;
	 
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom,   #c55b50,  #993930,  #cd7268);
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
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname">
		<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname">
		<label>Phone No.:</label><input type="text" value="<?php echo $row['pno']; ?>" name="pno">
		<label>Proff:</label><input type="text" value="<?php echo $row['proff']; ?>" name="proff">
		<label>Pc No.:</label><input type="text" value="<?php echo $row['pc']; ?>" name="pc">
		<input type="submit" name="submit">
		<a href="addcust.php" align="center">Back</a>
	</form>
</body>
</html>