<?php
require ('database/db_conection.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($dbcon, $_POST["query"]);
 $query = "SELECT * FROM users
WHERE  id  LIKE '%".$search."%'
  OR user_name LIKE '%".$search."%' 
  OR user_email LIKE '%".$search."%' 

 ";}
else
{
 $query = "SELECT * FROM users";
}
$result = mysqli_query($dbcon, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
   <tr>
     <th>ID</th>
     <th>UserName</th>
     <th>User Email</th>
	   <th>Action</th>
	 
    </tr>';
 while($row1 = mysqli_fetch_assoc($result))
 {
  $output .= '
  <tr>
    <td>'.$row1["id"].'</td>
    <td>'.$row1["user_name"].'</td>
    <td>'.$row1["user_email"].'</td>
	<td>
	<a href="delete.php?del=<?= $row1["id"]?>">
		<button class="btn btn-danger">Delete</button>
	</a>
	</td>
	<td>
		<button class="btn btn-danger">Edit</button>
	</td>
    
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