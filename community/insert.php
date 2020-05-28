<?php
//insert.php\

    if(isset($_POST["subject"]))
    {
	 include("database/db_conection.php");
    $subject = mysqli_real_escape_string($dbcon, $_POST["subject"]);
    $comment = mysqli_real_escape_string($dbcon, $_POST["comment"]);
	
date_default_timezone_set('Asia/Kuala_Lumpur');
						$date = date('d-m-Y');
						$time = date('h:i:s');
						
	
    $query = "INSERT INTO comments(comment_subject, comment_text,date,time)VALUES ('$subject', '$comment','$date','$time')";
    mysqli_query($dbcon, $query);
    }
    ?>