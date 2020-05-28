	<?php 
	 error_reporting(0);
	session_start();

	include("database/db_conection.php");
	// cek apakah yang mengakses halaman ini sudah login
	
  $notel = $_SESSION['costumer_contact'];
  $sqlk = "SELECT * FROM costumer WHERE costumer_contact='$notel'";
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

	?>


<?php

include('database/db_conection.php');
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
        
          <!-- Content Row -->
          
		  



<html>

<head>

</head>
<body>


<!------ Include the above in your HEAD tag ---------->

<div class="container">
  

	  <h1 class="well">REDEEMED TOKEN</h1>
		<div class="col-lg-12 well">
	<div class="row">
	 	<?PHP 
$icc=$berjaya['costumer_ic'];
$bnn=mysqli_query($dbcon,"select * from token where costumer_ic='$icc'");
$nmm=mysqli_fetch_array($bnn);
?>

	<h2>Point Available: <?PHP echo $nmm['total'];?></h2>
		<table id="example" class="table">
		<tr>
		<th>Num.</th>
		<th>Item</th>
		<th>Point</th>
		<th>Date Redeem</th>
		<th>Time Redeem</th>
		<th>Status</th>
		</tr>
		
		<?PHP 
		$icc=$berjaya['costumer_ic'];
		$num=1;
		$hsn=mysqli_query($dbcon,"select * from historyredeem where ic_cus='$icc' order by id DESC");
		while($jhs=mysqli_fetch_array($hsn)){
			$status=$jhs['status'];
		?>
		<tr>
		<td><?PHP echo $num++;?></td>
		<td><?PHP echo $jhs['item'];?></td>
		<td><?PHP echo $jhs['point'];?></td>
		<td><?PHP echo $jhs['date'];?></td>
		<td><?PHP echo $jhs['time'];?></td>
		<td>
		<?PHP
		if($status=='0'){
			?>
			Already Redeem. Not Approve Yet.
			<?PHP
		}
		else
		{
		?>

		<?PHP		
		}
		?>
		
		
			<?PHP
		if($status=='1'){
			?>
			Approved. Please collect your token.
			<?PHP
		}
		else
		{
		?>

		<?PHP		
		}
		?>
		
			<?PHP
		if($status=='2'){
			?>
			You already collect your item redeem.
			<?PHP
		}
		else
		{
		?>

		<?PHP		
		}
		?>
		</td>
		</tr>
		<?PHP
		}
		?>
		</table>
			 <script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>


 
 
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


  
 
