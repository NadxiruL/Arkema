<?php
include("header.php");
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
    <h1 class="well">PENDAFTARAN LAMA</h1>
	<div class="col-lg-12 well">
	<div class="row">
	
	<?php
	
	include 'database/db_conection.php';

	if( isset($_GET['edit']))
	{
		$id = $_GET['edit'];
		$res = mysqli_query($dbcon, "SELECT * FROM costumer WHERE costumer_ic='$id'");
		$row = mysqli_fetch_array($res);
	}

	if(isset($_POST['submit']))
	{
		$costumer_name = $_POST['costumer_name'];
		$costumer_item_name = $_POST['costumer_item_name'];
		$costumer_ic = $_POST['costumer_ic'];
		$costumer_contact = $_POST['costumer_contact'];
		
		$quan = $_POST['quan'];
		$point=$quan*10;
		
		$idcus = $_POST['idcus'];
		$null = null;
		
		$jgv=mysqli_query($dbcon,"select * from token where costumer_ic='$costumer_ic'");
		$hnx=mysqli_fetch_array($jgv);
		$ttl=$hnx['total'];
		$tt2=$hnx['total_point'];

		$pttl=$point+$ttl;
		$ptt2=$point+$tt2;

		$re1s2= mysqli_query($dbcon,"UPDATE token SET total='$pttl', total_point='$ptt2' where costumer_ic='$costumer_ic'");
		$re1s= mysqli_query($dbcon,"insert into item  values ('$null','$idcus','$costumer_item_name','$quan','$point','0')");
		
	if($re1s==true){
		echo ("<script type='text/javascript'>alert('Done');document.location='searchProducts.php'</script>");

	}
	else
	{
		echo ("<script type='text/javascript'>alert('Fail');document.location='existingCostumer.php?edit=$idcus'</script>");


	}
	
	
	
	}
	
	?>
			<form method="POST">
			
			<?PHP
					echo " <div class=col-sm-12> ";
						echo " <div class=col-sm-6 form-group> ";
						echo "		<label>Nama</label> ";
						echo "		<input type=text name=costumer_name   value='".$row['2']."' placeholder=Enter First Name Here.. class=form-control readonly> <br> ";
								
				
						
							echo "	<label>Nombor Pendaftaran</label> ";
							echo "	<input type=text name=costumer_ic value='".$row['3']."'   placeholder=Enter Last Name Here.. class=form-control readonly> <br> ";
								 						
							echo "	<label>Nombor Telefon</label> ";
							echo "	<input type=text name=costumer_contact value='".$row['4']."'  placeholder=Enter Last Name Here.. class=form-control readonly> <br> ";
											
							
						echo "	<label>Item</label> ";
					?>
					  <select  name="costumer_item_name"  class="form-control" required>
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
						
				
				<?PHP
									
							echo "	<label>Kuantiti</label> ";
							echo "	<input type=number  name=quan placeholder=Enter State Name Here.. class=form-control>	 ";	
									?>
									
									<b style="color:red;">*****10 point for 1 item*****</b><br>					
							
						<?PHP
						
								echo "<input type=hidden name=idcus value='".$id."'";
							
							echo "	</div> ";
							
						
						echo "</div>	 ";
					
					echo "<div class=col-sm-10 form-group> ";?>
					
				<center> <input type="submit" name="submit" class="btn btn-lg btn-info">	</center>
					</form>  
		
</div>				
	</div> 
		
	</div> 
	</div> 
	</div> 
	

	
	
	</body>

</html>

