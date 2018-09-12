<?php

$servername = "192.168.31.40";
$username = "dms";
$password = "dms";
$dbname = "user";

$con =mysqli_connect($servername, $username, $password,$dbname);


if(isset($_POST['submit']))
 
{  
    $name=$_POST['name'];
    $email=$_POST['email'];
	$pass=$_POST['password'];
	$mobile=$_POST['mobile'];
    $course=$_POST['course'];

	   $query="insert into student_info(`name`,`email`,`password`,`mobileno`,`course`)
       values('$name','$email','$pass','$mobile','$course')";
     
        $result= mysqli_query($con,$query);
     

    if($result){
        
         echo"<script> user register successfully </script>";
        }
        
    else{
      echo "something is wrong";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- <script src="validation.js"></script> -->

        <script src="validation.js"></script>
    
    </head> <br>
       
            
    <div>        
    
    </div>
	 
    <body style="background-color:#d9fcd9;">
    
        <div class="container" style="width:40%; background-color:#d0d3d8;  border-radius: 20px; margin-top:40px;"><br>
            <h2 class="text-center" style="color:#ffffff; background-color:#d31d4e; border-radius: 15px;">Student Registration</h2><br>
           
            <form action="student_login.php"  method="post" onsubmit="return regular_validation()">

                <div class="form-group">
                <label>*Name:</label>
                <input type="text" name="name" id="username" class="form-control">
                <span id="usererror" class="text-danger font-weight-bold"></span>
                </div>
                
                <div class="form-group">
                <label>*Email:</label>
                <input type="email" name="email" id="email" class="form-control">
                <span id="emailerror" class="text-danger font-weight-bold"> </span>
                </div>
                
                <div class="form-group">
                <label>*Password:</label>
                <input type="password" 	name="password" id="password" class="form-control">
                <span id="passworderror" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                <label>*Confirm Password:</label>
                <input type="text" 	name="conpassword" id="cpassword" class="form-control">
                <span id="cpassworderror" class="text-danger font-weight-bold"> </span>
                </div>
                
                <div class="form-group">
                <label>*mobile No:</label>
                <input type="text" 	name="mobile" id="mobilenumber" class="form-control">
                <span id="mobileerror" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label >*Course:</label>
                        <select id="ddlView" name="course">    
                            <option value="Enginnering" selected>Enginnering</option>
                            <option value="BCA">BCA</option>
                            <option value="BSC">BSC</option>
                        </select>  
                </div>    <br>
                
                   <input type="submit" name="submit" class="btn btn-primary" value="Register">
                
                    <h5>Already have an Account? <a href="student_login.php"> Sign in </a> </h5><br>
                



            </form>  
        </div>
    </body>
</html>