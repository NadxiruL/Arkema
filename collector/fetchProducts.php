<?php
require ('database/db_conection.php');
$output = '';
if(isset($_POST["query"]))
{
  $search = mysqli_real_escape_string($dbcon, $_POST["query"]);
 $query = "SELECT * FROM costumer
WHERE  id  LIKE '%".$search."%' OR costumer_type LIKE '%".$search."%' OR costumer_name LIKE '%".$search."%' OR costumer_ic LIKE '%".$search."%' OR constumer_contact LIKE '%".$search."%' 
  OR costumer_address LIKE '%".$search."%' OR costumer_item LIKE '%".$search."%' OR costumer_item_qty LIKE '%".$search."%' OR costumer_points LIKE '%".$search."%' 
  


 ";}
else
{
 $query = "SELECT * FROM costumer";
}
$result = mysqli_query($dbcon, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
   <tr>
     <th>Type</th>
     <th>Nama</th>
     <th>Nombor Pendaftaran</th>
	 <th>Nombor Telefon</th>
	 <th>Alamat</th>
	 <th>Barangan</th>
	 <th>Kuantiti</th>
	 <th>Points</th>
	  <th>Action</th>
	 
    </tr>';
 while($row1 = mysqli_fetch_array($result))
 {
  $output .= '
  <tr>
  <td>'.$row1["costumer_type"].'</td>
    <td>'.$row1["costumer_name"].'</td>
    <td>'.$row1["costumer_ic"].'</td>
    <td>'.$row1["costumer_contact"].'</td>
	<td>'.$row1["costumer_address"].'</td>
	<td>'.$row1["costumer_item"].'</td>
	<td>'.$row1["costumer_item_qty"].'</td>
	<td>'.$row1["costumer_points"].'</td>
	
	
<td> <a href="edit.php?edit=$row[costumer_id]"> <button class="btn btn-danger">Edit</button></td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Record Not Found';
}
?>