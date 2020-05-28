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

 <table id=example class="table table-striped table-bordered">
 <thead>
   <tr>
     <th>Num</th>
     <th>Subject</th>
     <th>Description</th>
	 <th>Date</th>
	 <th>Time</th>
	 <th>Status</th>

	
    </tr>
	 </thead>
	 <tbody>
	
	
	
<?PHP
if(isset($_POST['mark'])){
	$id=$_POST['id'];
	
	$hqa=mysqli_query($dbcon,"UPDATE comments SET comment_status='1' WHERE comment_id='$id'");
	if($hqa==true){echo"";}else{echo"";}
	
}


$num=1;
 $query = "SELECT * FROM comments ORDER BY comment_id DESC";
$result = mysqli_query($dbcon, $query);
 while($row1 = mysqli_fetch_array($result)){
	 ?>


  <tr>
  <td><?PHP echo $num++;?></td>
     <td><?PHP echo  $row1["comment_subject"];?></td>
     <td><?PHP echo $row1["comment_text"];?></td>
     <td><?PHP echo $row1["date"];?></td>
	 <td><?PHP echo $row1["time"];?></td>
	 <td><?PHP
	 if($row1["comment_status"]==0){
		 ?>
		 Not Read
		 <?PHP
	 }
	 else
	 {
		 ?>
		 Already read
		 <?PHP
	 }
	 
	 ?></td>
	
	
	
<td> <?PHP
	 if($row1["comment_status"]==0){
		 ?>
		 <form method="post">
		 <input type="hidden" name="id" value="<?PHP echo $row1['comment_id'];?>">
		<button name="mark" class="btn btn-danger"><div style="color:white;" href="existingCostumer.php?edit=<?php echo $row1['idt'];?>">Mark As Read</div></button>
		</form>
		<?PHP
	 }
	 else
	 {
		 ?>
		 
		 <?PHP
	 }
	 
	 ?> </td>
    
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
  

 
 <script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>

		 
		  </div>
	

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      


  <?php
include ('includes/scripts.php');
include ('includes/footer.php');


  ?>


  
 
