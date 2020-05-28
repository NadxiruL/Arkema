<?php
include("database/db_conection.php");
$id=$_GET['id'];

	$query="SELECT SUM(quan) as ahakngt FROM item WHERE item_name ='$id' ";

	$sql = mysqli_query($dbcon , $query);
	$row = mysqli_fetch_array($sql);
	
	echo $row['ahakngt']."<br/>";

?>