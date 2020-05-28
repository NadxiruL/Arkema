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

<!DOCTYPE html>
<html>

<head>
	<title>leceh</title>
<link rel="stylesheet" type="text/css" media="screen"  href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>
<?PHP 	include 'header.php'; ?>
	
	<div class="container">
	<h1>
	<p>Welcome back <b><?php echo $berjaya['costumer_name']; ?> <!-- </b> Anda telah login sebagai <b><?php echo $berjaya['costumer_type']; ?></b>. --> <p>
	</h1>
	
	<br><br>

		<?PHP 
$icc=$berjaya['costumer_ic'];
$bnn=mysqli_query($dbcon,"select * from token where costumer_ic='$icc'");
$nmm=mysqli_fetch_array($bnn);


?>

	

	<?PHP 
	$ttp=$nmm['total'];
	if($ttp>=100){
		?>
			<a href="redeemtoken.php"><button class="btn btn-danger">Redeem Token</button></a>
		<?PHP
	}
	else{
	?>
		
	<?PHP
	}
	?>
<BR>
<br>
* REDEEM BUTTON ONLY AVAILABLE WHEN POINTS REACH 100 *

	<div class="inner_content_w3_agile_info">
					

						 
						  
			

					          <ul class="ca-menu">
									<li>
										<a href="#">
											
											<i class="fa fa-building-o" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main"><?PHP echo $nmm['total_point'];?></h4>
												<h3 class="ca-sub">Overall Point</h3>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
										  <i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one"><?PHP echo $nmm['total_redeem_point'];?></h4>
												<h3 class="ca-sub one">Reedemed Point</h3>
											</div>
										</a>
									</li>
									
									<li>
										<a href="#">
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main three"><?PHP echo $nmm['total'];?></h4>
												<h3 class="ca-sub three">Current Point</h3>
											</div>
										</a>
									</li>
										
									<div class="clearfix"></div>
								</ul>
					   </div>
					   
					   	    </div>

	<br/>
	<br/>

</div>
	
</body>
</html>