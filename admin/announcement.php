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
    <h1 class="well">Pengumuman</h1>
	<div class="col-lg-12 well">
	<div class="row">
	
	<br>
	
	<?php

if(isset($_POST['submit'])){ 
$title = $_POST['title'];
$des = $_POST['des'];

$query2=mysqli_query($dbcon ,"UPDATE announce SET title='$title', des='$des' where id='1'");
if($query2==true){
		echo ("<script type='text/javascript'>alert('Done');document.location='announcement.php'</script>");

}
else
{
		echo ("<script type='text/javascript'>alert(Failed');document.location='announcement.php/'</script>");

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
					
							
								
								<label>Tajuk</label>
								<input type="text" name="title" required value="<?PHP echo $jhs['title']; ?>" placeholder="Enter First Name Here.." class="form-control">
						
							<br><br><br><br>
						
								<label>Penerangan</label>
							<textarea name="des" placeholder="" rows="3" class="form-control" required><?PHP echo $jhs['des']; ?></textarea>
							</div>
						
					
						
				
					
						</div>
					<br>
			
					
					<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info">				
							
					
				</form> 
			
				</div>
	</div>
	</div>
	
	</body>

</html>


	

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      


  <?php
include ('includes/scripts.php');


  ?>


  
 
