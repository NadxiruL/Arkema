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
	<table id="example">
	<thead>
		<tr>
		 <th>Type</th>
		 <th>Nama</th>
		 <th>Nombor Kad Pengenalan</th>
		 <th>Nombor Telefon</th>
		</tr>
	</thead>
	 <tbody>
<?PHP
 $query = "SELECT * FROM costumer ";
$result = mysqli_query($dbcon, $query);
 while($row1 = mysqli_fetch_array($result)){
	 ?>




  <tr>
   <td><?PHP echo $row1["costumer_type"];?></td>
     <td><?PHP echo  $row1["costumer_name"];?></td>
     <td><?PHP echo $row1["costumer_ic"];?></td>
     <td><?PHP echo $row1["costumer_contact"];?></td>

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


  
 
