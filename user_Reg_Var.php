<?php
$Name=$_POST['RegName'];
$Email=$_POST['RegMail'];
$Mob=$_POST['RegNum'];
$Password=$_POST['RegPass'];
$ConfPassword=$_POST['RegConfPass'];

$Course=$_POST['RegCourse'];
include('db_Config.php');

if($Name=="" || $Email=="" || $Mob=="" || $Password=="" || $ConfPassword=="" || $Course=="")
{
	echo "Please enter valid field";

}
else
{

// $query=mysql_query("insert into userregistration values('NULL','$Name','$Mob','$Course','$Email','$Password','$ConfPassword')");
// 		if( $query )
// 		{
// 			echo " inserted";
// 		}
// 		else
// 		{
// 			echo "something is wrong";
// 		}
	echo "inseted";
}




?>