<?php
include 'header.php';
include 'database/db_conection.php';

?>

<html>

<head>

</head>
<body>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h1 class="well">DAFTAR PENGGUNA</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="POST" action="registerUser.php">
					<div class="col-sm-12">
						<div class="row">
						
								<div class="col-sm-6 form-group">
								<label>Username</label>
								<input type="text" name="username" placeholder="Enter First Name Here.." class="form-control">
							</div>
							
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="Enter Last Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Email</label>
								<input type="text" name="useremail" placeholder="Enter Last Name Here.." class="form-control">
							</div>
							
							<div class="col-sm-6 form-group">
								<label>Role</label>
						  <select name="userrole" placeholder="Enter City Name Here.." class="form-control">
						  <option value="admin">Admin</option>
						  <option value="master">Master</option>
						</select>
							</div>
						
						</div>	
								<input type="submit" name="submit" class="btn btn-lg btn-info"></submit>	
							
						</div>
					
				
					</div>
				</form> 
				</div>
	</div>
	</div>
	
	</body>

</html>

<?php

include("database/db_conection.php");
 
 
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$username = $_POST['username'];
$password = $_POST['password'];
$useremail = $_POST['useremail'];
$userrole = $_POST['userrole'];

	$sql_u = "SELECT * FROM users WHERE username='$username'";
  	$sql_e = "SELECT * FROM users WHERE email='$useremail'";
  	$res_u = mysqli_query($dbcon, $sql_u);
  	$res_e = mysqli_query($dbcon, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
	$msg1 = "Sorry... username already taken";
		 echo "<script type='text/javascript'>alert('$msg1');</script>";
  	  $name_error = "Sorry... username already taken"; 	
  	}
		else {
//Insert Query of SQL56
$query = mysqli_query($dbcon ,"insert into users(username, password, useremail, userrole) values ('$username', '".md5($password)."', '$useremail', '$userrole')");
$message = "DATA SUBMITTED SUCCESSFULLY.";
      echo "<script type='text/javascript'>alert('$message');</script>";

}

	}
	
mysqli_close($dbcon); // Closing Connection with Server

?>