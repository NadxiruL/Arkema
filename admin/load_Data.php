<?php  
 //load_data.php  
 	include("database/db_conection.php"); 
 $output = '';  
 if(isset($_POST["collector"]))  
 {  
      if($_POST["collector"] != '')  
      {  
           $sql = "SELECT * FROM collector WHERE collector = '".$_POST["namasyarikat"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM collector";  
      }  
      $result = mysqli_query($dbcon, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["namasyarikat"].'</div></div>';  
      }  
      echo $output;  
 }  
 ?>  