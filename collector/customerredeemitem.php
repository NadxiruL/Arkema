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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

          
          </div>
			
          <!-- Content Row -->
         
		 

<html>

<head>
<link rel="stylesheet" type="text/css" media="screen"  href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>



<!------ Include the above in your HEAD tag ---------->

<div class="container">
  

	  <h1 class="well"></h1>
		<div class="col-lg-10 well">
	<div class="row">

	

		<table id="example" class="table">
		<thead>
		<tr>
		<th>Num.</th>
		<th>Customer Name</th>
		<th>Item</th>
		<th>Point</th>
		<th>Date Redeem</th>
		<th>Time Redeem</th>
		<th>Status</th>
		<th>Pick Up Status</th>
		</tr>
		</thead>
		<?PHP 
		
		$num=1;
		$hsn=mysqli_query($dbcon,"select * from historyredeem order by id DESC");
		while($jhs=mysqli_fetch_array($hsn)){
			$status=$jhs['status'];
			$icx=$jhs['ic_cus'];
			
			$hsn2=mysqli_query($dbcon,"select * from costumer where costumer_ic='$icx'");
		    $jhs2=mysqli_fetch_array($hsn2);
		
		?>
		<tbody>
		<tr>
		<td><?PHP echo $num++;?></td>
			<td><?PHP echo $jhs2['costumer_name'];?></td>
		<td><?PHP echo $jhs['item'];?></td>
	
		
		<td><?PHP echo $jhs['point'];?></td>
		<td><?PHP echo $jhs['date'];?></td>
		<td><?PHP echo $jhs['time'];?></td>
		<td>
		<?PHP
		if($status=='0'){
			?>
			Not Approve
			<?PHP
		}
		else
		{
		?>
		
		<?PHP		
		}
		?>
		
		
			<?PHP
		if($status=='1'){
			?>
			Approved
			<?PHP
		}
		else
		{
		?>

		<?PHP		
		}
		?>
		
			<?PHP
		if($status=='2'){
			?>
Collected			
<?PHP
		}
		else
		{
		?>

		<?PHP		
		}
		?>
		</td>
		<td>
		<?PHP 
if(isset($_POST['check'])){
$check=$_POST['check'];
$id=$_POST['id'];

$hxn=mysqli_query($dbcon,"UPDATE historyredeem SET status='$check' where id='$id'");
if($hxn==true){
	echo "<script type='text/javascript'>alert('Berjaya');document.location='customerredeemitem.php'</script>";
}
else
 {
echo "<script type='text/javascript'>alert('Gagal');document.location='customerredeemitemitem.php'</script>";

}
}
?>
 <form method="POST"><select name="check" onchange="this.form.submit()">
	<option value="">Select</option>
	
	<option value="1">Approved</option>
	<option value="2">Collected</option>
	</select>
	<input type="hidden" name="id" value="<?PHP echo $jhs['id'];?>">
</form>
		
		</td>
		</tr>
		
		</tbody>
		<?PHP
		}
		?>
		</table>
			
				</div>
				
				
	</div>
	
	</div>
	 <script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>
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


  
 
