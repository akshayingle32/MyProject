<?php

$servername = "192.168.31.40";
$username = "dms";
$password = "dms";
$dbname = "user";

$con =mysqli_connect($servername,$username,$password,$dbname);
include("alert_box.php");

if(isset($_POST['submit']))
 
{  
    $name=$_POST['name'];
    $email=$_POST['email'];
	$pass=$_POST['password'];
	$mobile=$_POST['mobile'];
    $course=$_POST['course'];
  //  echo $name,$email,$password,$mobile,$course."<br>";

	   $query="insert into student_info(`name`,`email`,`password`,`mobileno`,`course`)
       values('$name','$email','$pass','$mobile','$course')";
     
        $result= mysqli_query($con,$query);

        
     

   if($result){
        
           $msg="user register successfully ";
      echo "<script type='text/javascript'>
    alert_box('".$msg."');
     </script>"; 
        }
        
    else{
    $msg="something is wrong email or password already registered! ";
   echo "<script type='text/javascript'>
    alert_box('".$msg."');
     </script>"; 
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
        <script src="validation.js"></script>

        <script src="validation.js">
     var password=document.getElementById('password').value;
     var cpassword=document.getElementById('cpassword').value;
     document.write(password);
     document.write(cpassword);

</script>
    
    </head>  

	 
    <body style="background-color:#3e4144;">
    <div class="container" style="width:40%; background-color:white;  margin-top:50px; ">
            <div class="container" style="width:100%; background-color:#d0d3d8;   margin-top:20px; margin-top:20px; margin-bottom:20px; "><br>
                <h2 class="text-center" style="color:#ffffff; background-color:#b70e3b; border-radius: 15px;">Student Registration</h2><br>
            
                <form action="student_registration.php"  method="post" onsubmit="return regular_validation()">

                    <div class="input-group">
                    <span class="input-group-addon" id="usererror"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" type="text" class="form-control" name="name" id="username" placeholder="Enter Name">
                    </div>  <br>

                    <div class="input-group">
                    <span class="input-group-addon" id="emailerror"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" type="text" class="form-control" name="email" id="email" placeholder="Enter Email ID">
                    </div>  <br>

                    <div class="input-group">
                    <span class="input-group-addon" id="mobileerror"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input type="text" type="text" class="form-control" name="mobile" id="mobilenumber" placeholder="Enter Mobile No">
                    </div>  <br>

                    <div class="input-group">
                    <span class="input-group-addon" id="passworderror"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" type="text" class="form-control" name="password" id="password" placeholder="Enter Password">
                    </div>  <br>




                    <div class="form-group">
                        <label >*Course:</label>
                            <select id="ddlView" name="course">    
                                <option value="Digital Marketing" selected>Digital Marketing</option>
                                <option value="Python">Python</option>
                                <option value="PHP">PHP</option>
                            </select>  
                    </div>  

                    <div class="input-group">
                    <span class="input-group-addon" id="passworderror"><i class="glyphicon glyphicon-comment"></i></span>
                    <textarea class="form-control" rows="2.5" id="comment" name="messege" placeholder="Enter your Messege"></textarea>
                    </div>  


                    
                      <br>
                    
                    <input type="submit" name="submit" class="btn btn-primary" value="Register">
                    
                        <h5>Already have an Account? <a href="student_login.php"> Sign in </a> </h5><br>
                    



                </form>  
            </div>
        </div>   
    </body>
</html>