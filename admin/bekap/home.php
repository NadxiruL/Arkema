


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	include ("header.php");
	session_start();
	include("database/db_conection.php");
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['userrole']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1></h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['userrole']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>


	<ul>
		<?php
		$query="SELECT * FROM item GROUP BY item_name";
    	$sql = mysqli_query($dbcon , $query);
	    while($row = mysqli_fetch_array($sql)){
	    	$xhs=$row['item_name'];

	    $queryx="SELECT sum(quan) as pitihar FROM item where item_name='$xhs'";
    	$sqlx = mysqli_query($dbcon , $queryx);
	    $rowx = mysqli_fetch_array($sqlx);

		?>	

		<li><a href="view_category.php?id=<?PHP echo $row['item_name'];?>"><?PHP echo $row['item_name'];?> (<?PHP echo $rowx['pitihar'];?>)</a></li>
		<?php
		}
		?>
		
	</ul>


	
</body>
</html>