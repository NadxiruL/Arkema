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
<?PHP

include('includes/top-navbar.php');
?>
        <!-- Topbar -->
        

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
			
          <!-- Content Row -->
         
		 

    <!-- Content Header (Page header) -->



	
<?PHP
if(isset($_POST['search'])){
	$data=$_POST['data'];
	 $query = "SELECT  id_cus as idt, costumer_type as type, costumer_name as name, costumer_ic as ic, costumer_contact as tel, item_name as item, quan as quan, point as point  FROM item left join costumer on item.id_cus=costumer.costumer_ic where costumer.costumer_name like '%$data%' or costumer.costumer_ic like '%$data%' or costumer.costumer_contact like '%$data%'";
}
else
{
	 $query = "SELECT  id_cus as idt, costumer_type as type, costumer_name as name, costumer_ic as ic, costumer_contact as tel, item_name as item, quan as quan, point as point  FROM item left join costumer on item.id_cus=costumer.costumer_ic order by item_id DESC";
}
?>


<div class="container">

<table id="example">
	<thead>
		<tr>
		 <th>Type</th>
		 <th>Nama</th>
		 <th>Nombor Pendaftaran</th>
		 <th>Nombor Telefon</th>
		 <th>Barangan</th>
		 <th>Kuantiti</th>
		 <th>Points</th>
		 <th>Action</th>
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
	 <td><button  class="btn btn-danger"><a style="color:white;" href="existingCostumer.php?edit=<?php echo $row1['idt'];?>">Edit</a></button></td>
  </tr>
  <?PHP 
 }
?>
	 </tbody>
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


  
 
