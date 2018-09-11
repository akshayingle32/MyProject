<?php
$cn=mysql_connect("localhost","root","hitler");
 mysql_select_db("user");

 if(!$cn)
		{
		 die("connection failed".mysql_connect_error( ));
		}
		

?>