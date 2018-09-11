


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

function mysqli_result($res,$row=0,$col=0){
    $numrows = mysqli_num_rows($res);
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}
	

?>

