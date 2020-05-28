<?php 
	 error_reporting(0);
	session_start();

	include("database/db_conection.php");
	// cek apakah yang mengakses halaman ini sudah login
	
  $username = $_SESSION['username'];
  $sqlk = "SELECT * FROM users WHERE username='$username' and and userrole='admin'";
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
       <?PHP

include('includes/top-navbar.php');

  ?>
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


<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h1 class="well"></h1>
	<div class="col-lg-12 well">
	<div class="row">
	<?php

if(isset($_POST['submit'])){ 
$des = $_POST['des'];


date_default_timezone_set('Asia/Kuala_Lumpur');
						$tarikh = date('d-m-Y');
						$time = date('h.i.s');
						$gambar = $tarikh.$time."7.jpg";



	move_uploaded_file($_FILES["pic"]["tmp_name"], "../img/s/".$gambar);




$null=null;
$query2=mysqli_query($dbcon ,"INSERT INTO item2 VALUES ('$null','$gambar','$des')");
if($query2==true){
		echo ("<script type='text/javascript'>alert('Done');document.location='additem.php'</script>");

}
else
{
		echo ("<script type='text/javascript'>alert(Failed');document.location='additem.php/'</script>");

}

}
?>
	
	
				<form method="POST" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="row">
						
							
								<div class="col-sm-6 form-group">
								<label>Picture</label>
								<input type="file" name="pic" class="form-control">
							</div>
								<div class="col-sm-6 form-group">
								<label>Description</label>
								<input type="text" name="des" placeholder="Description" class="form-control">
							</div>
							
						
						</div>	
					
					
						
					
					
					<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info"></submit>					
							
					</div>
				</form> 
			
				</div>
				
				
	</div>
<br>
	
		<div class="col-lg-12 well">
	<div class="row">
	   <h1 class="well">LIST OF ITEM</h1>
		<table class="table">
		<tr>
		<th>Num.</th>
		<th>Picture</th>
		<th>Description</th>
		<th>Action</th>
		</tr>
		
		<?PHP 
		$num=1;
		$hsn=mysqli_query($dbcon,"select * from item2 order by des ASC");
		while($jhs=mysqli_fetch_array($hsn)){
		?>
		<tr>
		<td><?PHP echo $num++;?></td>
		<td><img src="../img/s/<?PHP echo $jhs['pic'];?>" width="30%"></td>
		<td><?PHP echo $jhs['des'];?></td>
		<td>Delete | Update</td>
		</tr>
		<?PHP
		}
		?>
		</table>
			
				</div>
				
				
	</div>
	
	</div>
	
	</body>

</html>

<?php

/* $dbcon = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
 mysqli_select_db($dbcon, "users"); // Selecting Database from Server */
 

 
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$costumer_type = $_POST['costumer_type'];
$costumer_name = $_POST['costumer_name'];
$costumer_ic = $_POST['costumer_ic'];
$costumer_contact = $_POST['costumer_contact'];
$costumer_address = $_POST['costumer_address'];
$costumer_item = $_POST['costumer_item'];
$costumer_item_qty = $_POST['costumer_item_qty'];
$costumer_points = $_POST['costumer_points'];

$point=$costumer_item_qty*$costumer_points;

$sql_u = "SELECT * FROM costumer WHERE costumer_ic='$costumer_ic'";
$res_u = mysqli_query($dbcon, $sql_u);

if (mysqli_num_rows($res_u) > 0) {
	$msg1 = "Sorry...ic is already exist!";
		 echo "<script type='text/javascript'>alert('$msg1');</script>";
  	  $name_error = "Sorry... username already taken"; 	
  	}
else  
{

$id=null;
$query=mysqli_query($dbcon ,"insert into costumer values ('$id','$costumer_type', '$costumer_name', '$costumer_ic','$costumer_contact','$costumer_address')");
$query2=mysqli_query($dbcon ,"insert into item values ('$id','$costumer_ic','$costumer_item','$costumer_item_qty','$point','0')");
if($query2==true){
		echo ("<script type='text/javascript'>alert('Berjaya');document.location='searchProducts.php'</script>");

}
else
{
		echo ("<script type='text/javascript'>alert(Gagal');document.location='Pendaftaran.php/'</script>");

}

}

}
mysqli_close($dbcon); // Closing Connection with Server

/*INSERT INTO item (costumer_item_name , costumer_item_qty , costumer_ic , costumer_name , costumer_contact)
SELECT costumer_item , costumer_item_qty , costumer_ic , costumer_name , costumer_contact
FROM costumer;*/
?>
		 
	

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      


  <?php
include ('includes/scripts.php');



  ?>


  
 
