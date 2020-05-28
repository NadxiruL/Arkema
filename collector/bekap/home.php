
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<?php 
	session_start();

	include 'header.php';
	
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['userrole']==""){
		header("location:login.php?pesan=gagal");
	}

	?>
	

	
	 

	<p>Welcome <b><?php echo $_SESSION['username']; ?></b>
	
	
	<?php 
	include("database/db_conection.php");
	
	$sql1 = "SELECT SUM(quan) as total FROM item";
	$result1 = mysqli_query($dbcon, $sql1);
	$row1 = mysqli_fetch_array($result1);
	
	$sql2 = "SELECT COUNT(costumer_id) as total FROM costumer";
	$result2 = mysqli_query($dbcon, $sql2);
	$row2 = mysqli_fetch_array($result2);

?> 

	<br/>
	<br/>


<div class="w3-container">
  <h2>General Statistic</h2>
 

  <table class="w3-table">
    <tr>
      <th width='20%'>Total Quantity Item</th>
       <th>Total Customer </th>

    </tr>
    <tr>
             <th><?php echo $row1['total']; ?> Unit</th>
         <th><?php echo $row2['total']; ?> People</th>
  
  </table>
</div>

</body>
</html>

