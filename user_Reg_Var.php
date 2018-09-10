
<?php

var_dump($_POST);


$Name=$_POST['RegName'];
$Email=$_POST['RegMail'];
$Mob=$_POST['RegNum'];
$Password=$_POST['RegPass'];
$ConfPassword=$_POST['RegConfPass'];
echo $Name,$Email,$Password,$Mob;
$Course=$_POST['RegCouse'];

include('db_Config.php');

echo "step1";


if($Name=="" || $Email=="" || $Mob=="" || $Password=="" || $ConfPassword=="" || $Course=="")
{
	echo "Please enter valid field";

}
// else
// {

//  $query=mysqli_query("insert into userregistration values('NULL','$Name','$Mob','$Course','$Email','$Password','$ConfPassword')");
//  		if( $query )
// 		{
// 			header('location:user_login.php');
// 		}
//  		else
// 		{
//  			die("something is wrong:".mysql_error()); 
//  		}
	
// }



$servername = "localhost";
$username = "dms";
$password = "dms";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

$sql = "insert into userregistration (RegName, RegMob, RegCourse, RegEmail, RegPswd, RegConfPaswd) values('$Name','$Mob','$Course','$Email','$Password','$ConfPassword')";

var_dump($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






?>