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
	
	<?php
	
	include 'database/db_conection.php';

	if( isset($_GET['edit']))
	{
		$id = $_GET['edit'];
		$res = mysqli_query($dbcon, "SELECT * FROM costumer WHERE costumer_ic='$id'");
		$row = mysqli_fetch_array($res);
	}

	if(isset($_POST['submit']))
	{
		$costumer_name = $_POST['costumer_name'];
		$costumer_item_name = $_POST['costumer_item_name'];
		$costumer_ic = $_POST['costumer_ic'];
		$costumer_contact = $_POST['costumer_contact'];
		
		$quan = $_POST['quan'];
		$point=$quan*10;
		
		$idcus = $_POST['idcus'];
		$null = null;
		
		$jgv=mysqli_query($dbcon,"select * from token where costumer_ic='$costumer_ic'");
		$hnx=mysqli_fetch_array($jgv);
		$ttl=$hnx['total'];
		$tt2=$hnx['total_point'];

		$pttl=$point+$ttl;
		$ptt2=$point+$tt2;

		$re1s2= mysqli_query($dbcon,"UPDATE token SET total='$pttl', total_point='$ptt2' where costumer_ic='$costumer_ic'");
		$re1s= mysqli_query($dbcon,"insert into item  values ('$null','$idcus','$costumer_item_name','$quan','$point','0')");
		
	if($re1s==true){
		echo ("<script type='text/javascript'>alert('Done');document.location='searchProducts.php'</script>");

	}
	else
	{
		echo ("<script type='text/javascript'>alert('Fail');document.location='existingCostumer.php?edit=$idcus'</script>");


	}
	
	
	
	}
	
	?>
			<form method="POST">
			
			<?PHP
					echo " <div class=col-sm-12> ";
						echo " <div class=col-sm-6 form-group> ";
						echo "		<label>Name</label> ";
						echo "		<input type=text name=costumer_name   value='".$row['2']."' placeholder=Enter First Name Here.. class=form-control readonly> <br> ";
								
				
						
							echo "	<label>Identity Number</label> ";
							echo "	<input type=text name=costumer_ic value='".$row['3']."'   placeholder=Enter Last Name Here.. class=form-control readonly> <br> ";
								 						
							echo "	<label>Contact Number</label> ";
							echo "	<input type=text name=costumer_contact value='".$row['4']."'  placeholder=Enter Last Name Here.. class=form-control readonly> <br> ";
											
							
						echo "	<label>Item</label> ";
					?>
					  <select  name="costumer_item_name"  class="form-control" required>
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
						
				</br>
				Pengumpul
				<select  name="collector"  class="form-control" required>
						   <option value="">==Select==</option>
						  	<?PHP 
		$num=1;
		$sdf=mysqli_query($dbcon,"select * from collector order by namasyarikat ASC");
		while($dsa=mysqli_fetch_array($sdf)){
		?>
						  <option value="<?PHP echo $dsa['namasyarikat'];?>"><?PHP echo $dsa['namasyarikat'];?></option>
				<?PHP
		}
				?>
						</select>	
				
				
				<?PHP
									
							echo "	<label>Quantity</label> ";
							echo "	<input type=number  name=quan placeholder=Enter State Name Here.. class=form-control>	 ";	
									?>
									
									<b style="color:red;">*****10 point for 1 item*****</b><br>					

						<?PHP
						
						
						
								echo "<input type=hidden name=idcus value='".$id."'";
							
							echo "	</div> ";
							
						
						echo "</div>	 ";
					
					echo "<div class=col-sm-10 form-group> ";?>
					
					<br>
					
					
					
		 <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info">	
					</form>  
		
</div>				
	</div> 
		
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


  
 
