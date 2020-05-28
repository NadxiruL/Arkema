<?php 
	 error_reporting(0);
	session_start();

	include("database/db_conection.php");
	// cek apakah yang mengakses halaman ini sudah login
	
  $username = $_SESSION['username'];
  $sqlk = "SELECT * FROM users WHERE username='$username'  and userrole='admin'";
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

          
          </div>
			
          <!-- Content Row -->
         
  <div class="row">
<?php
		$query="SELECT * FROM item GROUP BY item_name";
    	$sql = mysqli_query($dbcon , $query);
	    while($row = mysqli_fetch_array($sql)){
	    	$xhs=$row['item_name'];

		$quern="SELECT * FROM item2 where des='$xhs'";
    	$sqln = mysqli_query($dbcon , $quern);
	    $rown = mysqli_fetch_array($sqln);

			
	    $queryx="SELECT sum(quan) as pitihar FROM item where item_name='$xhs'";
    	$sqlx = mysqli_query($dbcon , $queryx);
	    $rowx = mysqli_fetch_array($sqlx);

		?>	
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
               <a href="view_category.php?id=<?PHP echo $row['item_name'];?>"> <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?PHP echo $row['item_name'];?></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?PHP echo $rowx['pitihar'];?></div>
                    </div>
                    <div class="col-auto">
                     <img width="50px" src="../img/s/<?PHP echo $rown['pic'];?>">
                    </div>
                  </div>
                </div></a>
              </div>
            </div>
		<?php
		}
		?>
            
			
   </div>
		  








	<br/>
	<br/>


	<ul>
		

		
		
	</ul>



		 
	

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
   
   
   

      


  <?php
include ('includes/scripts.php');


  ?>


  
 
