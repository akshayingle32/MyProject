<?php
 include("db_config.php");
 include("alertBox.php");
function insert($table_name,$values)
{
	// retrieve the keys of the array (column titles)
    $fields = array_keys($values);

    // build the query
    $sql = "INSERT INTO ".$table_name."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $values)."')";

    // run and return the query result resource
    return mysql_query($sql);
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