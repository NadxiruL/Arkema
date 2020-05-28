<?php

include("database/db_conection.php");


//$delete_query="delete  from users WHERE id='$delete_id'";//delete query
$delete_id=$_GET['del'];
$run=mysqli_query($dbcon, "delete  from users WHERE id='$delete_id'");


if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";
}

?>