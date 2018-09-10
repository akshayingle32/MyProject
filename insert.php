<?php
$host="localhost";
$user="root";
$password="";
$db="task";
mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['submit']))
 {  
    $uname=$_POST['user'];
	$pass=$_POST['pass'];
	$conpass=$_POST['conpass'];
	$email=$_POST['email'];
    $mobile=$_POST['mobile'];
    
	$query="insert into user_register(`username`,`password`,`conpassword`,`email`,`mobileno`)
	values('$uname','$pass','$conpass','$email','$mobile')";
	$status=mysql_query($query);

    if($status){
        
         echo"<script> user register successfully </script>";
        }
        
    else{
      echo "something wrong";
    }
  }
?>