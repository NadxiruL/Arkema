<?PHP

include("database/db_conection.php");


echo $_POST['val'];
echo $_POST['user_id'];


$query = mysqli_query($dbcon , "UPDATE 'item' set 'status' = '".$_POST['val'];."' WHERE 'id' = '".$_POST['user_id'];."'   ");

if ($query){

echo "Success" ;
	}





?>