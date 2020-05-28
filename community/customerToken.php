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
 <?php 
 include ('includes/top-navbar.php');
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
    <h1 class="well">Lupus Barang</h1>
	
	
	<?php
	
date_default_timezone_set('Asia/Kuala_Lumpur');
						$year = date('Y');
						$month = date('m');
						$day = date('d');
						
				

	if(isset($_POST['submit']))
	{
		
		$costumer_item_name = $_POST['costumer_item_name'];
		$costumer_ic = $_POST['costumer_ic'];
		
		
		
		$collector = $_POST['collector'];
		
		$quan = $_POST['quan'];
		$point=$quan*10;
		
		$idcus = $_POST['idcus'];
		$null = null;

		$bnn=mysqli_query($dbcon,"select * from token where costumer_ic='$costumer_ic'");
		$nmm=mysqli_fetch_array($bnn);
		$point1=$nmm['total'];
		$total_point=$nmm['total_point'];

		$ttp=$point1+$point;
		$ttp2=$total_point+$point;

	
		$sql="insert into item  values ('$null','$costumer_ic','$costumer_item_name','$quan','$point','1','$year','$month','$day','$collector')";
		$re1s= mysqli_query($dbcon, $sql);
		$query2=mysqli_query($dbcon ,"UPDATE token SET total='$ttp', total_point='$ttp2' WHERE costumer_ic='$costumer_ic'");

	if($query2==true){
		echo ("<script type='text/javascript'>alert('Done');document.location='history.php'</script>");

	}
	else
	{
		echo ("<script type='text/javascript'>alert('Fail');document.location='customerToken.php'</script>");


	}
	
	
	
	}
	
	?>
			<form method="POST">
			
			<?PHP
					echo " <div class=col-sm-12> ";
						echo " <div class=col-sm-6 form-group> ";
						echo "		<label>Name</label> ";
						echo "		<input type=text name=costumer_name   value='".$berjaya['costumer_name']."' placeholder=Enter First Name Here.. class=form-control readonly> <br> ";
								
				
						
							echo "	<label>Identity Number</label> ";
							echo "	<input type=text name=costumer_ic value='".$berjaya['costumer_ic']."'   placeholder=Enter Last Name Here.. class=form-control readonly> <br> ";
								 						
							echo "	<label>Contact Number</label> ";
							echo "	<input type=text name=costumer_contact value='".$berjaya['costumer_contact']."'  placeholder=Enter Last Name Here.. class=form-control readonly> <br> ";
											
							
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
								<?PHP	
							echo "	<label>Quantity</label> ";
							echo "	<input type=number  name=quan placeholder=Enter State Name Here.. class=form-control>	 ";	
									?>
									
									<b style="color:red;">*****10 point for 1 item*****</b><br>	

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


  
 
