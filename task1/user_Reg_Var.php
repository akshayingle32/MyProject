
<?php
session_start();
// var_dump($_POST);
// var_dump($_SERVER);
if(isset($_GET['RegName'])) { $Name= $_GET['RegName'];}
elseif(isset($_POST['RegName'])){  $Name= $_POST['RegName'];}
else{ $Name="";}
if(isset($_GET['RegMail'])) { $Email= $_GET['RegMail'];}
elseif(isset($_POST['RegMail'])){  $Email= $_POST['RegMail'];}
else{ $Email="";}

if(isset($_GET['RegNum'])) { $Mob= $_GET['RegNum'];}
elseif(isset($_POST['RegNum'])){  $Mob= $_POST['RegNum'];}
else{ $Mob="";}

if(isset($_GET['RegCouse'])) { $Course= $_GET['RegCouse'];}
elseif(isset($_POST['RegCouse'])){  $Course= $_POST['RegCouse'];}
else{ $Course="";}

if(isset($_GET['RegPass'])) { $Password= $_GET['RegPass'];}
elseif(isset($_POST['RegPass'])){  $Password= $_POST['RegPass'];}
else{ $Password="";}

if(isset($_GET['RegConfPass'])) { $ConfPassword= $_GET['RegConfPass'];}
elseif(isset($_POST['RegConfPass'])){  $ConfPassword= $_POST['RegNRegConfPassame'];}
else{ $ConfPassword="";}

// $Name=$_POST['RegName'];
// $Email=$_POST['RegMail'];
// $Mob=$_POST['RegNum'];
// $Password=$_POST['RegPass'];
// $ConfPassword=$_POST['RegConfPass'];
echo $Name,$Email,$Password,$Mob;
// $Course=$_POST['RegCouse'];

// include('db_Config.php');

// echo "step1";

if($Name=="" || $Email=="" || $Mob=="" || $Password=="" || $ConfPassword=="" || $Course=="")
{

	echo "<br> <br> Please enter valid field<br><br><br>";
	// sleep(2);
	header("location:user_registration.php");

}
if($Name=="" && $Email=="" && $Mob=="" && $Password=="" && $ConfPassword=="" && $Course=="")
{

	echo "Please enter valid field";
	sleep(2);
	// header("location:user_registration.php");

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



$servername = "192.168.31.40";
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

// var_dump($sql);
if ($conn->query($sql) === TRUE) {
	echo "<br><br>";
	echo "New record created successfully";
	$_SESSION['message'] = "Registration succesful!";
	// sleep(2);
	header('location:user_login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






?>