
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



	
	$sql1 = "SELECT SUM(quan) as total FROM item";
	$result1 = mysqli_query($dbcon, $sql1);
	$row1 = mysqli_fetch_array($result1);
	
	$sql2 = "SELECT COUNT(costumer_id) as total FROM costumer";
	$result2 = mysqli_query($dbcon, $sql2);
	$row2 = mysqli_fetch_array($result2);

?> 
	


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">    
<?PHP

include('includes/top-navbar.php');

  ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          



			
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Quantity Item</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row1['total']; ?> Unit</div>
                    </div>
                    <div class="col-auto">
                     
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
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Customer</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $row2['total']; ?> People</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
             
            </div>
          </div>
		  
		  		
        <!-- /.container-fluid -->

      </div>
      </div>
      <!-- End of Main Content -->

      


  <?php
include ('includes/scripts.php');



  ?>


  
 
