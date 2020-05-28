<?php 
include("header.php");
include("database/db_conection.php");
?>
<html>
<head>

<link rel="stylesheet" type="text/css" media="screen"  href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>
 </br> </br>
 
	
<?PHP
if(isset($_POST['search'])){
	$data=$_POST['data'];
	 $query = "SELECT  item_id as item_id, id_cus as idt, costumer_type as type, costumer_name as name, costumer_ic as ic, costumer_contact as tel, item_name as item, quan as quan, point as point  FROM item left join costumer on item.id_cus=costumer.costumer_ic where costumer.costumer_name like '%$data%' or costumer.costumer_ic like '%$data%' or costumer.costumer_contact like '%$data%'";
}
else
{
	 $query = "SELECT  item_id as item_id, id_cus as idt, costumer_type as type, costumer_name as name, costumer_ic as ic, costumer_contact as tel, item_name as item, quan as quan, point as point , status as status  FROM item left join costumer on item.id_cus=costumer.costumer_ic order by item_id DESC";
}
?>



<div class="container">
 <table id=example class="table table-striped table-bordered">
 <thead>
   <tr>
     <th>Type</th>
     <th>Nama</th>
     <th>Nombor Pendaftaran</th>
	 <th>Barangan</th>
	 <th>Kuantiti</th>
	  <th>Status</th>
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
	 <td><?PHP echo $row1["item"];?></td>
	 <td><?PHP echo $row1["quan"];?></td>
	 <td><?PHP if($row1["status"]==0){
		 echo "<p>Check Out</p>";
	 }
	 else {
		 echo "<p>Check In</p>";
	 }
		 ?>
		 
		 </td>
	
	
<td>
<?PHP 
if(isset($_POST['check'])){
$check=$_POST['check'];
$itemid=$_POST['itemid'];

$hxn=mysqli_query($dbcon,"UPDATE item SET status='$check' where item_id='$itemid'");
if($hxn==true){
	echo "<script type='text/javascript'>alert('Berjaya');document.location='check-out-item.php'</script>";
}
else
 {
echo "<script type='text/javascript'>alert('Gagal');document.location='check-out-item.php'</script>";

}
}
?>
 <form method="POST"><select name="check" onchange="this.form.submit()">
	<option value="">Select</option>
	<option value="1">Check In</option>
	<option value="0">Check Out</option>
	</select>
	<input type="hidden" name="itemid" value="<?PHP echo $row1['item_id'];?>">
</form>
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
  

 </html>
 <script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>

 </body>
 
 <!-- https://www.youtube.com/watch?v=jm3H-j8GCl4 -->
 
 