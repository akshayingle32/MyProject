


<?php

// echo "php";
$con=mysqli_connect("192.168.31.40","dms","dms","user");
 //mysqli_select_db("user");
// echo "data";

 if(!$con)
	
 {
		 die("connection failed".mysqli_connect_error());

		}

		else{
			echo "connect";
		}


?>

