<?php 
	 error_reporting(0);
	session_start();

	include("database/db_conection.php");
	// cek apakah yang mengakses halaman ini sudah login
	
  $username = $_SESSION['username'];
  $sqlk = "SELECT * FROM users WHERE username='$username' and userrole='admin'";
  $hasil = mysqli_query($dbcon,$sqlk);
  $berjaya = mysqli_fetch_array($hasil);


if($berjaya==false)
	{
			echo "<script language='JavaScript' type='text/javascript'>alert('Please login first!')</script>";
echo "<script language='JavaScript' type='text/javascript'>
 window.location.replace('index.php');
</script>";
	}
else
	{

	}



include('includes/header.php');
include('includes/navbar.php');

  ?>
	

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

          
          </div>
			
          <!-- Content Row -->



<html>

<head>

</head>
<body>

<?PHP

include('includes/top-navbar.php');
?>

<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <h1 class="well">Register Collector</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="POST" action="registerUser.php">
					<div class="col-sm-12">
						<div class="row">
						
								<div class="col-sm-6 form-group">
								<label>Username</label>
								<input type="text" name="username"  class="form-control">
							</div>
							
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" name="password"  class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Email</label>
								<input type="text" name="useremail"  class="form-control">
							</div>
							
							<div class="col-sm-6 form-group">
								<label>Role</label>
						  <select name="userrole"  class="form-control">
						  <option value="collector">Collector</option>
						  <option value="admin">Admin</option>
						</select>
							</div>
						
						</div>	
								<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info"></submit>	
							
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

	

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      


  <?php
include ('includes/scripts.php');



  ?>


  
 
