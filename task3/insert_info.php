
<?php

$servername = "192.168.31.40";
$username = "dms";
$password = "dms";
$dbname = "user";

$con =mysqli_connect ($servername, $username, $password,$dbname);


if(isset($_POST['submit']))
 {  

    $name=$_POST['name'];
    $email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
    $course=$_POST['course'];

	 $query="insert into student_info(`name`,`email`,`password`,`mobileno`,`course`)
	 values('$name','$email','$password','$mobile','$course')";
     $result=mysqli_query($query,$con);
     

    if($result){
        
         echo"<script> user register successfully </script>";
        }
        
    else{
      echo "something is wrong";
    }
  }
?>
