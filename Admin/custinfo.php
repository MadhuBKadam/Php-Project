<!DOCTYPE html>
<html>
<head>
<title>Customer Information 
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
	background: linear-gradient(to bottom,   #be4a3e,  #d3837b,  #e7bcb8);
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
 



table {
 
  width: 80%;

  
}

table, th, td {
  border: 1px solid;
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
<br>
<br>
<br><h3 align="center"><u>Customer Data</u></h3>
<br>


		<table  align="center" >
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
                                <th>Phone No.</th>
				<th>Proff</th> 
                                 <th>Pc No.</th>
                                 <th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
				
                                                        <td><?php echo $row['lastname']; ?></td>
                                                        <td><?php echo $row['pno']; ?></td>
                                                        <td><?php echo $row['proff']; ?></td>
                                                        <td><?php echo $row['pc']; ?></td>
							<td>
								<i class="fa fa-edit"></i><a href="edit.php?id=<?php echo $row['userid']; ?>"><b>Edit</b></a>&nbsp &nbsp
								<i class="fa fa-trash-o"></i><a href="delete.php?id=<?php echo $row['userid']; ?>"><b>Delete</b></a>
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

<h4 align="center">
<a href="http://localhost/Codes/project/Admin/dashboard.html#" align="center"><i class="fa fa-fw fa-home"></i>Back to Home</a></h4>
</body>
</html>
 