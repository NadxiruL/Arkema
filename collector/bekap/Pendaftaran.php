<?php
include 'header.php';

include("database/db_conection.php");
 
?>


<html>

<head>

</head>
<body>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h1 class="well">NEW REGISTRATION</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="POST">
					<div class="col-sm-12">
						<div class="row">
								<div class="col-sm-6 form-group">
							<label>Type</label>
						  <select name="costumer_type" placeholder="Enter City Name Here.." class="form-control">
						  <option value="Individual">Individual</option>
						  <option value="Company">Company</option>
						</select>
						</div>
							
								<div class="col-sm-6 form-group">
								<label>Name</label>
								<input type="text" name="costumer_name" placeholder="" class="form-control">
							</div>
							
							<div class="col-sm-6 form-group">
								<label>Registeration Number</label>
								<input type="text" name="costumer_ic" placeholder="" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Contact</label>
								<input type="text" name="costumer_contact" placeholder="" class="form-control">
							</div>
						
						</div>	
						
						<div class="form-group">
							<label>Address</label>
							<textarea name="costumer_address" placeholder="" rows="3" class="form-control"></textarea>
						</div>	
					
						
					
						<div class="row">
								<div class="col-sm-6 form-group">
							<label>Item</label>
						  <select name="costumer_item" placeholder="" class="form-control">
						   <option value="">==Select==</option>
						  	<?PHP 
		$num=1;
		$hsn=mysqli_query($dbcon,"select * from item2 order by des ASC");
		while($jhs=mysqli_fetch_array($hsn)){
		?>
						  <option value="<?PHP echo $jhs['des'];?>"><?PHP echo $jhs['des'];?></option>
				<?PHP
		}
				?>
						</select>
						</div>



							<div class="col-sm-4 form-group">
								<label>Quantity</label>
								<input type="number" name="costumer_item_qty" placeholder="" class="form-control">
							</div>	
							
							<div class="col-sm-4 form-group">
								<label>Points</label>
								<input type="number" name="costumer_points" placeholder="" class="form-control" value="10" </readonly>
							</div>	
							
						</div>
					
					<input type="submit" name="submit" class="btn btn-lg btn-info"></submit>					
							
					</div>
				</form> 
			
				</div>
	</div>
	</div>
	
	</body>

</html>

<?php

/* $dbcon = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
 mysqli_select_db($dbcon, "users"); // Selecting Database from Server */
 

 
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$costumer_type = $_POST['costumer_type'];
$costumer_name = $_POST['costumer_name'];
$costumer_ic = $_POST['costumer_ic'];
$costumer_contact = $_POST['costumer_contact'];
$costumer_address = $_POST['costumer_address'];
$costumer_item = $_POST['costumer_item'];
$costumer_item_qty = $_POST['costumer_item_qty'];
$costumer_points = $_POST['costumer_points'];

$point=$costumer_item_qty*$costumer_points;

$sql_u = "SELECT * FROM costumer WHERE costumer_ic='$costumer_ic'";
$res_u = mysqli_query($dbcon, $sql_u);

if (mysqli_num_rows($res_u) > 0) {
	$msg1 = "Sorry...ic is already exist!";
		 echo "<script type='text/javascript'>alert('$msg1');</script>";
  	  $name_error = "Sorry... username already taken"; 	
  	}
else  
{

$id=null;
$query=mysqli_query($dbcon ,"insert into costumer values ('$id','$costumer_type', '$costumer_name', '$costumer_ic','$costumer_contact','$costumer_address')");
$query2=mysqli_query($dbcon ,"insert into item values ('$id','$costumer_ic','$costumer_item','$costumer_item_qty','$point','0')");
$query3=mysqli_query($dbcon ,"insert into token values ('$id','$costumer_ic','$point','$point','0')");
if($query3==true){
		echo ("<script type='text/javascript'>alert('Berjaya');document.location='searchProducts.php'</script>");

}
else
{
		echo ("<script type='text/javascript'>alert(Gagal');document.location='Pendaftaran.php/'</script>");

}

}

}
mysqli_close($dbcon); // Closing Connection with Server

/*INSERT INTO item (costumer_item_name , costumer_item_qty , costumer_ic , costumer_name , costumer_contact)
SELECT costumer_item , costumer_item_qty , costumer_ic , costumer_name , costumer_contact
FROM costumer;*/
?>