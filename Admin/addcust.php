<!DOCTYPE html>
<html>
<head>
<title>
Manage Customers
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


.check{
	position: relative;
	width:100%;
	height: 100%;
}


.main{
justify-content: center;
padding: 10px;
align-items: center;
margin-top: 10px;
 margin: auto;
bottom:-50px;
position: relative;
vertical-align: baseline;
	width: 60%;
	height: 500px;
	background: red;
	 
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}

#chk{
	display: none;
}

label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}

button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background:  #8a3b3b;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}

button:hover{
	background:  #b84444;
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.4  );
}




table {
  border-collapse: collapse;
  width: 80%;

  
}

th, td {
  text-align: left;
  padding: 8px;
 
  border-radius: 8px;
}

th{
background-color: #F5DEB3;
}

tr:nth-child(even) {
  background-color: #933930;
}
tr:nth-child(odd) {
  background-color: #d9948d;
}



a:link {
  color: #800000;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: sienna;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: #DC143C;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}





</style>
</head>
<body>
<h1 align="center">Manage Customer's</h1>
<div class="main">
<input type="checkbox" id="chk" aria-hidden="true">
	<div class="check">
		<form method="POST" action="add.php" align="center">

<label for="chk" aria-hidden="true"></label>
			 <input type="text" name="firstname" placeholder=" First Name" required="">
			  <input type="text" name="lastname" placeholder="Last Name" required="">
			  <input type="text" name="pno" placeholder="Phone No" required="">
			  <input type="text" name="proff" placeholder="Proff Id" required="">
			 <input type="text" name="pc" placeholder="Pc No" required="">
			 <button>Submit</button> 
		</form>
	</div>
</div>
	<br>
	
<br>
<br>
<br>
<br>
<br>
<br>

<h4 align="center">
<a href="http://localhost/Codes/project/Admin/dashboard.html#" align="center"><i class="fa fa-fw fa-home"></i>Back to Home</a></h4>


</body>
</html>
 