<?php
include('database_query.php');
$j=10;
$k=10;
if($j==$k)
{
	$msg="It is correct query and alert box is run";
	message($msg);
	//echo "dklfj";
}
else
{
	echo "does not print alert box";
}

?>