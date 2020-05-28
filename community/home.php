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

<?PHP

include('includes/top-navbar.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          

			
          <!-- Content Row -->
          <div class="row">
		<?PHP 
$icc=$berjaya['costumer_ic'];
$bnn=mysqli_query($dbcon,"select * from token where costumer_ic='$icc'");
$nmm=mysqli_fetch_array($bnn);


?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Overall Points</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?PHP echo $nmm['total_point'];?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Reedemed Points</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?PHP echo $nmm['total_redeem_point'];?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Current Balance Points</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?PHP echo $nmm['total'];?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              
            </div>
          </div>
		  
		  
		
	
	
	<br><br>



	

	<?PHP 
	$ttp=$nmm['quan'];
	if($ttp<=5){
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


          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      


  <?php
include ('includes/scripts.php');
include ('includes/footer.php');


  ?>


  
 
