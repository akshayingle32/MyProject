<?php
include ('db_config.php');
$email=$_POST['email'];
$pass=$_POST['pass'];
$line1="SELECT RegEmail FROM userregistration WHERE RegEmail='".$email."'";
$line2="SELECT RegMob FROM userregistration WHERE RegMob='".$pass."'";


$query=mysqli_query($con,$line1);
$query1=mysqli_query($con,$line2);
//$result=mysqli_result($query);
$num_row1=mysqli_num_rows($query);

$num_row2=mysqli_num_rows($query1);

if($num_row1==1 ) 
{
   echo $email."this email already exisest";
}
elseif ($num_row2==1) {
	# code...
	echo $pass."this mobile already exisest";
}
else
{
	echo "Thanku for new entry";
}

?>