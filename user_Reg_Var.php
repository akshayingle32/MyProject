
<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$Name=$_POST['RegName'];
$Email=$_POST['RegMail'];
$Mob=$_POST['RegNum'];
$Password=$_POST['RegPass'];
$ConfPassword=$_POST['RegConfPass'];

$Course=$_POST['RegCouse'];
 echo "Server method is POST";
}
elseif ($_SERVER['REQUEST_METHOD']=="GET")
 {
	$Name=$_POST['RegName'];
$Email=$_POST['RegMail'];
$Mob=$_POST['RegNum'];
$Password=$_POST['RegPass'];
$ConfPassword=$_POST['RegConfPass'];

$Course=$_POST['RegCouse'];
 echo "Server method is GET";
}


// $Name=$_POST['RegName'];
// $Email=$_POST['RegMail'];
// $Mob=$_POST['RegNum'];
// $Password=$_POST['RegPass'];
// $ConfPassword=$_POST['RegConfPass'];

// $Course=$_POST['RegCouse'];
// include('db_Config.php');

// if($Name=="" || $Email=="" || $Mob=="" || $Password=="" || $ConfPassword=="" || $Course=="")
// {
// 	echo "Please enter valid field";

// }
// else
// {

//  $query=mysqli_query("insert into userregistration values('NULL','$Name','$Mob','$Course','$Email','$Password','$ConfPassword')");
//  		if( $query )
// 		{
// 			header('location:user_login.php');
// 		}
//  		else
// 		{
//  			die("something is wrong:".mysqli_error()); 
//  		}


	
// }

?>