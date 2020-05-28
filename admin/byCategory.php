<?php 
	 error_reporting(0);
	session_start();

	include("database/db_conection.php");
	// cek apakah yang mengakses halaman ini sudah login
	
  $username = $_SESSION['username'];
  $sqlk = "SELECT * FROM users WHERE username='$username' and userrole='admin'";
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
<?PHP

include('includes/top-navbar.php');
?>
        <!-- Topbar -->
        

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
			
          <!-- Content Row -->
         
		 

    <!-- Content Header (Page header) -->





<div class="container">
	<form method="GET">
	 <select  name="costumer_type"  class="form-control" onchange="this.form.submit()" required>
						   <option value="">Select Category</option>
						  	<?PHP 
							$category=$_GET['costumer_type']; 
		$num=1;
		$hsn=mysqli_query($dbcon,"select distinct costumer_type from costumer order by costumer_type DESC ");
		while($jhs=mysqli_fetch_array($hsn)){
		?>
						  <option value="<?PHP echo $jhs['costumer_type'];?>" <?PHP if($category==$jhs['costumer_type']){ echo "selected"; }?>><?PHP echo $jhs['costumer_type'];?></option>
				<?PHP
		}
				?>
						</select>
					
				</form>	<br><br>
<table id="example">
	<thead>
		<tr>
		
		 <th>Barangan</th>
		 <th>Kuantiti</th>
		 

		</tr>
	</thead>
	 <tbody>
	 
	 <style>
    select {
        width: 10px;
        margin: 5px;
    }
    select:focus {
        min-width: 10px;
        width: auto;
    }    
</style>
	
<?PHP

$hqn=mysqli_query($dbcon,"select * from costumer where costumer_type='$category'");
while($bvv=mysqli_fetch_array($hqn)){
?>
<tr>
  
     <td><?PHP echo $bvv['item_name'];?></td>
     <td><?PHP echo $bvv['quan'];?></td>


	
</tr>
	<?PHP
}
	?>


	 </tbody>
</table>
 
 

		 
		  </div>
	
 <script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
   
    <!-- End of Content Wrapper -->


  <?php
include ('includes/scripts.php');
include ('includes/footer.php');



  ?>


