 <!DOCTYPE html>
<html>
<head>
<title>
Change Password
</title><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body {
font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(to bottom, #7d5151 0%, #b55b5b 100%);
   justify-content: center; 
   }
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: center;
  left: 50%;
  text-align: center;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: center;
  bottom: 0;
  right: 15px;
  border: 3px solid #a84c4c;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #a84c4c;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #783e3e;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

 

<button class="open-button" onclick="openForm()">Access</button>

<div class="form-popup" id="myForm">
  <form method="POST" action="in.php"  class="form-container">
    <h1>Login Credentials</h1>

    <label for="email"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h4 align="center">
<a href="http://localhost/Codes/project/Admin/dashboard.html#" align="center"><i class="fa fa-fw fa-home"></i>Back to Home</a></h4>



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
