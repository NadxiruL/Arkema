<?php 
	 error_reporting(0);
	session_start();

	include("database/db_conection.php");
	// cek apakah yang mengakses halaman ini sudah login
	
  $username = $_SESSION['username'];
  $sqlk = "SELECT * FROM collector WHERE username='$username' and status='1'";
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
				<form method="POST">
					<div class="col-sm-12">
						<div class="row">
								<div class="col-sm-6 form-group">
							<label>Kategori</label>
						  <select name="costumer_type"  required class="form-control">
						   <option value="Individual">Premise</option>
						  <option value="Industry">Industry</option>
						  <option value="Educataion">Education</option>
						   <option value="Household">Household</option>
						    <option value="Commercial">Commercial</option>
						</select>
						</div>
							
								<div class="col-sm-6 form-group">
								<label>Name</label>
								<input type="text" name="costumer_name" required placeholder="" class="form-control">
							</div>
							
							<div class="col-sm-6 form-group">
								<label>Registeration Number</label>
								<input type="text" name="costumer_ic" required placeholder="" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Contact</label>
								<input type="text" name="costumer_contact" required placeholder="" class="form-control">
							</div>
						
						</div>	
						
						<div class="form-group">
							<label>Address</label>
							<textarea name="costumer_address" required placeholder="" rows="3" class="form-control"></textarea>
						</div>	
					
				
						
					
						<div class="row">
						
						<div class="col-sm-4 form-group">
								<label>Daerah</label>
								<input type="text" name="daerah" required placeholder="" class="form-control">
							</div>	
							
							
								<div class="col-sm-6 form-group">
							<label>Item</label>
						  <select name="costumer_item" placeholder="" required class="form-control">
						   <option value="">==Select==</option>
						  	<?PHP 
		$num=1;
		$hsn=mysqli_query($dbcon,"select * from item2 order by des ASC");
		while($jhs=mysqli_fetch_array($hsn)){
		?>
						  <option value="<?PHP echo $jhs['des'];?>"><?PHP echo $jhs['des'];?></option>
				<?PHP
		}
				?>
						</select>
						</div>



							<div class="col-sm-4 form-group">
								<label>Quantity</label>
								<input type="number" name="costumer_item_qty" required placeholder="" class="form-control">
							</div>	
							
							<div class="col-sm-4 form-group">
								<label>Weight</label>
								<input type="number" name="costumer_points" placeholder="" required class="form-control" >
							</div>	
							
						</div>
					
					<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info"></submit>					
							
					</div>
				</form> 
			
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
$daerah = $_POST['daerah'];

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
$query=mysqli_query($dbcon ,"insert into costumer values ('$id','$costumer_type', '$costumer_name', '$costumer_ic','$costumer_contact','$costumer_address','$daerah')");
$query2=mysqli_query($dbcon ,"insert into item values ('$id','$costumer_ic','$costumer_item','$costumer_item_qty','$point','1')");
$query3=mysqli_query($dbcon ,"insert into token values ('$id','$costumer_ic','$point','$point','0')");


if($query3==true){
		echo ("<script type='text/javascript'>alert('Done');document.location='searchProducts.php'</script>");

}
else
{
		echo ("<script type='text/javascript'>alert(Failed');document.location='Pendaftaran.php/'</script>");

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


  
 
