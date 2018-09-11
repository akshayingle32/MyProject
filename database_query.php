<?php
 include("db_config.php");
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

?>