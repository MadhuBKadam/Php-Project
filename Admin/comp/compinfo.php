<!DOCTYPE html>
<html>
<head>
<title>
Computer Informaation
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
	
	background: linear-gradient(to bottom,   #cb6c62,  #a54136,  #682922);
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
margin-top: 5px;
 margin: auto;
bottom:-50px;
position: relative;
vertical-align: baseline;
	width: 60%;
	height: 50px;
	background: red;
	 
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}

#chk{
	display: none;
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
  background-color: #674d3c;
}
tr:nth-child(odd) {
  background-color: #d9ad7c;
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
<body bgcolor="coral">
	 
	<br>
<h1 align="center"><b><u>Computer Info</b></u></h1>
	<div>
		<table border="1" align="center" >
			<thead>
				<th>Pc No.</th>
				<th>Name</th>
                                <th>Model</th>
				
                                 <th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `comp`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['pc']; ?></td>
				
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['model']; ?></td>
                                                         
							<td>
								<i class="fa fa-edit"></i><a href="ed.php?id=<?php echo $row['id']; ?>"><b>Edit</b></a>
								<i class="fa fa-trash-o"></i><a href="del.php?id=<?php echo $row['id']; ?>"><b>Delete</b></a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>


<br>
<br>

<h3 align="center">
<a href="http://localhost/Codes/project/Admin/dashboard.html#" align="center"><i class="fa fa-fw fa-home"></i>Back to Home</a></h3>

</body>
</html>
 