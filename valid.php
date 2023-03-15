<?php

    include('Admin/connection.php');



        $pname = $_POST['username'];
        $pcode = $_POST['email'];
        $tstock = $_POST['password'];
        $cost = $_POST['verfication'];
        $pdesc = $_POST['comp id'];

    mysqli_querry($connection,="insert into custinfo(username,email,password,verfication,compid) values('$username','$email','$password','$verification id','$comp id')");

   header('location:login.html');


function test_input($data){

$data = trim($data);
$data = stripsplash($data);
$data = htmlspecialchars($data);
return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POS") {
 
$username = test_input($_POST["username"]);
$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM custlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['username'] == $username) &&
			($user['password'] == $password)) {
				header("location: main.html");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}