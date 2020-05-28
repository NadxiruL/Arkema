		  
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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
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
    <h1 class="well">REDEEM TOKEN</h1>
	 

	
		<div class="col-lg-12 well">
	<div class="row">
	<?PHP 
$icc=$berjaya['costumer_ic'];
$bnn=mysqli_query($dbcon,"select * from token where costumer_ic='$icc'");
$nmm=mysqli_fetch_array($bnn);
?>
	
	<h2>Point Available: <?PHP echo $nmm['total'];?></h2>
		<table class="table">
	
<style> 
.blur {
  
  opacity: 0.5;
  filter: Alpha(opacity=50); /* IE8 and earlier */
}
</style>		
		<?PHP 
		$ttp=$nmm['total'];
		$ttp2=$nmm['total_redeem_point'];
		$num=1;
		$hsn=mysqli_query($dbcon,"select * from redeemitem order by point ASC");
		while($jhs=mysqli_fetch_array($hsn)){
		$pointz=$jhs['point'];
		?>
		
		
		<tr 
		<?PHP 

	if($ttp>=$pointz){
		?>
		
		
		<?PHP
	}
	else
	{
		?>
		class="blur"
		<?PHP
	}
		?>
		>

		<td width="20%"><img src="../img/picredeemitem/<?PHP echo $jhs['pic'];?>" width="100%"></td>
		<td><h3><font color="red"><?PHP echo $jhs['des'];?></font></h3>
		<font size="5%" color="black">Point to redeem:<?PHP echo $jhs['point'];?></font>
		</td>
		<td><br>
				<?PHP 
$ttl2=$ttp-$pointz;
	if($ttp>=$pointz){
		?>
		
		<form method="post">
		<input type="hidden" name="ic" value="<?PHP echo $berjaya['costumer_ic'];?>">
		<input type="hidden" name="item" value="<?PHP echo $jhs['des'];?>">
		<input type="hidden" name="point" value="<?PHP echo $jhs['point'];?>">
		<input type="hidden" name="urpoint" value="<?PHP echo $ttp;?>">
		<input type="hidden" name="total_redeem_point" value="<?PHP echo $ttp2;?>">
		<button class="btn btn-danger" name="submit" onclick="return  confirm('Do you want to redeem this item? <?PHP echo $jhs['des'];?> (<?PHP echo $jhs['point'];?> point). Your point will be deducted : <?PHP echo $ttl2;?> point ')">Redeem Token</button>
		</form>
			<?PHP
	}
	else
	{	
?>

<button class="btn btn-danger" disabled>Redeem Token</button>
	<?PHP
	}
		?>
		
		
		
		</a>
		
		
		</td>
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
$ic = $_POST['ic'];
$item = $_POST['item'];
$point = $_POST['point'];
$urpoint = $_POST['urpoint'];
$total_redeem_point = $_POST['total_redeem_point'];

$ttlrdmpnt=$total_redeem_point+$point;
$totalpoint=$urpoint-$point;

date_default_timezone_set('Asia/Kuala_Lumpur');
						$date = date('d-m-Y');
						$time = date('h:i:s');
						


$id=null;
$query=mysqli_query($dbcon ,"insert into historyredeem values ('$id','$ic','$item','$point','$date','$time','0')");
$query2=mysqli_query($dbcon ,"UPDATE token SET total='$totalpoint', total_redeem_point='$ttlrdmpnt' WHERE costumer_ic='$ic'");

if($query2==true){
		echo ("<script type='text/javascript'>alert('Please pick up your token from collector..');document.location='home.php'</script>");

}
else
{
		echo ("<script type='text/javascript'>alert(Failed');document.location='redeemtoken.php/'</script>");

}

}


?>
		  
		  
		  
		  
		  
		  
		  
		  

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      


  <?php
include ('includes/scripts.php');



  ?>


  
 
