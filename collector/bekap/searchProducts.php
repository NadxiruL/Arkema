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

    <!-- Content Header (Page header) -->
  <h1>CHECK IN ITEM</h1> 

 
	
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
	
	
<td>  <button  class="btn btn-danger"><a style="color:white;" href="existingCostumer.php?edit=<?php echo $row1['idt'];?>">Edit</a></button></td>
    
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

 </body>
 </html>
 
 