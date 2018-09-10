<?php
$cn=mysql_connect("192.168.31.40","dms","dms");
 mysql_select_db("user");

 if(!$cn)
		{
		 die("connection failed".mysql_connect_error());
		}
		

?>