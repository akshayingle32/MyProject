<?php
$cn=mysqli_connect("localhost","root","hitler");
 mysqli_select_db("user");

 if(!$cn)
		{
		 die("connection failed".mysqli_connect_error( ));
		}
		

?>