<?php
require ('database/db_conection.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($dbcon, $_POST["query"]);
 $query = "SELECT * FROM costumer
WHERE  id  LIKE '%".$search."%'
 OR costumer_type LIKE '%".$search."%' 
  OR costumer_name LIKE '%".$search."%' 
  OR costumer_item LIKE '%".$search."%' 
   OR costumer_item_qty LIKE '%".$search."%' "; 
   
   
   
   }
else
{
 // $query = "SELECT * FROM costumer";
 $query = " SELECT costumer.costumer_id , costumer.costumer_type, costumer_name , costumer_item . costumer_item_qty , token.token_type
			FROM costumer , token
			WHERE costumer.costumer_id = token.token_id
			ORDER BY costumer_id " ;
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
	 <th>Barangan</th>
	 <th>Kuantiti</th>
	 <th>Token</th>
	  <th>Action</th>
	 
    </tr>';
 while($row1 = mysqli_fetch_array($result))
 {
  $output .= '
  <tr>
  <td>'.$row1["costumer_type"].'</td>
    <td>'.$row1["costumer_name"].'</td>
    <td>'.$row1["costumer_item"].'</td>
    <td>'.$row1["costumer_item_qty"].'</td>
	<td>'.$row1["token_type"].'</td>
	
	<td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Check Out</button>
    
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