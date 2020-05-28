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
          
		  
		  
		  
	





    <!-- Content Header (Page header) -->


 
	
<?PHP
$icx=$berjaya['costumer_ic'];
if(isset($_POST['search'])){
	$data=$_POST['data'];
	 $query = "SELECT  item.status as status,id_cus as idt, costumer_type as type, costumer_name as name, costumer_ic as ic, costumer_contact as tel, item_name as item, quan as quan, point as point  FROM item left join costumer on item.id_cus=costumer.costumer_ic where costumer.costumer_name like '%$data%' and costumer.costumer_ic='$icx' or costumer.costumer_ic like '%$data%' and costumer.costumer_ic='$icx' or costumer.costumer_contact like '%$data%' and costumer.costumer_ic='$icx'";
}
else
{
	 $query = "SELECT   item.status as status,id_cus as idt, costumer_type as type, costumer_name as name, costumer_ic as ic, costumer_contact as tel, item_name as item, quan as quan, point as point  FROM item left join costumer on item.id_cus=costumer.costumer_ic where costumer.costumer_ic='$icx'";
}
?>


<div class="container">

 <table id=example class="table table-striped table-bordered">
 <thead>
   <tr>
     <th>Type</th>
     <th>Nama</th>
     <th>Nombor Pendaftaran</th>
	 <th>Nombor Telefon</th>
	 <th>Barangan</th>
	 <th>Kuantiti</th>
	 <th>Points</th>
	 <th>Status</th>
	
    </tr>
	 </thead>
	 <tbody>
	
	
	
<?PHP
$result = mysqli_query($dbcon, $query);
 while($row1 = mysqli_fetch_array($result)){
	 ?>


  <tr>
  <td><?PHP echo $row1["type"];?></td>
     <td><?PHP echo  $row1["name"];?></td>
     <td><?PHP echo $row1["ic"];?></td>
     <td><?PHP echo $row1["tel"];?></td>
	 <td><?PHP echo $row1["item"];?></td>
	 <td><?PHP echo $row1["quan"];?></td>
	 <td><?PHP echo $row1["point"];?></td>
	 <td><?PHP $status=$row1["status"]; $status2=$row1["status"];
	 if($status==1){
		 ?>
		 CHECK-IN
		 <?PHP
	 }else{}
	 ?>
	 <?PHP
	 if($status2==0){
		 ?>
		 CHECK-OUT
		 <?PHP
	 }else{}
	 ?>
	 
	 
	 
	 </td>
	
	

    
   </tr>
  <?PHP 
 }
?>
	 </tbody>
	 </div>
</table>

<?PHP
if(isset($_POST['search'])){
	$data=$_POST['data'];
	 $query = "SELECT  costumer_type as type, costumer_name as name, costumer_ic as ic, costumer_contact as tel, item_name as item, quan as quan, point as point  FROM item left join costumer on item.id_cus=costumer.costumer_id where costumer.costumer_name like '%$data%' or costumer.costumer_ic like '%$data%' or costumer.costumer_contact like '%$data%'";
$result = mysqli_query($dbcon, $query);
$row1 = mysqli_fetch_array($result);

if($row1==true){
	?>
	
	<?PHP
}
else
{
	?>

	<?PHP
}
}
?>
  

 
 <script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>


 
 
		  
		  
		  
		  
		  
		  
		  
		  

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
     </div>
      <!-- End of Main Content -->

      


  <?php
include ('includes/scripts.php');



  ?>


  
 
