<?php
session_start();//session starts here

?>

<html>
<head lang="en">

</head>
<style>


</style>

<body>

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Email dan Password tidak sesuai !</div>";
		}
	}
	?>

<div class="container">
    <div class="row">
		<div class="span4 offset4 well">
			<legend>Please Sign In</legend>
          	
			<form method="POST" action="processLogin.php" accept-charset="UTF-8">
			<input type="text" id="username" class="span4" name="username" placeholder="Username">
			<input type="password" id="password" class="span4" name="password" placeholder="Password">
            <label class="checkbox">
            	<input type="checkbox" name="remember" value="1"> Remember Me
            </label>
			<button type="submit" name="login" class="btn btn-info btn-block">Sign in</button>
			</form>    <br>
			<a href="../customer/">LOGIN AS CUSTOMER</a> | <a href="../admin/">LOGIN AS ADMIN</a>
		</div>
	</div>
</div>

</body>

</html>



<?php

/* include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_fetch_assoc($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
	else {
	  $message = "Username and/or Password incorrect.\\nTry again.";
      echo "<script type='text/javascript'>alert('$message');</script>";

	}
   
} */

?>

