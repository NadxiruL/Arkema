<?php
include 'header.php';

include("database/db_conection.php");
 
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
    <h1 class="well">Update Announcement</h1>
	<div class="col-lg-12 well">
	<div class="row"><?php

if(isset($_POST['submit'])){ 
$title = $_POST['title'];
$des = $_POST['des'];

$query2=mysqli_query($dbcon ,"UPDATE announce SET title='$title', des='$des' where id='1'");
if($query2==true){
		echo ("<script type='text/javascript'>alert('Berjaya');document.location='announcement.php'</script>");

}
else
{
		echo ("<script type='text/javascript'>alert(Gagal');document.location='announcement.php/'</script>");

}

}
?>
				<form method="POST">
					<div class="col-sm-12">
						<div class="row">
								<?PHP 
								$hsn=mysqli_query($dbcon,"select * from announce where id='1'");
								$jhs=mysqli_fetch_array($hsn);
								?>
					
							
								<div class="col-sm-6 form-group">
								<label>Title</label>
								<input type="text" name="title" required value="<?PHP echo $jhs['title']; ?>" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<br><br><br><br>
								<div class="col-sm-6 form-group">
								<label>Description</label>
							<textarea name="des" placeholder="" rows="3" class="form-control" required><?PHP echo $jhs['des']; ?></textarea>
							</div>
						
					
						
				
					
						</div>
					
			
					
					<input type="submit" name="submit" class="btn btn-lg btn-info">				
							
					
				</form> 
			
				</div>
	</div>
	</div>
	
	</body>

</html>

