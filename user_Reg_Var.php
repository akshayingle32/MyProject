
<?php

var_dump($_POST);


$Name=$_POST['RegName'];
$Email=$_POST['RegMail'];
$Mob=$_POST['RegNum'];
$Password=$_POST['RegPass'];
$ConfPassword=$_POST['RegConfPass'];

$Course=$_POST['RegCouse'];
include('db_Config.php');

if($Name=="" || $Email=="" || $Mob=="" || $Password=="" || $ConfPassword=="" || $Course=="")
{
	echo "Please enter valid field";

}
else
{

 $query=mysql_query("insert into userregistration values('NULL','$Name','$Mob','$Course','$Email','$Password','$ConfPassword')");
 		if( $query )
		{
			header('location:user_login.php');
		}
 		else
		{
 			die("something is wrong:".mysql_error()); 
 		}
	
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 302c3ee8a20625e4f51131277ccbf890528a8fa0
>>>>>>> b9f29d81bba9032d0e4a622ca2fa3dafb3d3f816
?>