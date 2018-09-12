<?php
session_start();
include("alert_box.php");
if(!empty($_SESSION['message']))
{
    $msg=$_SESSION['message'];
   echo "<script type='text/javascript'>
    alert_box('".$msg."');
     </script>";  
       }
     else
     {
        session_destroy();
     }

?><!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    
    </head> <br>
       
            
    <div>        
    
    </div>
	 
    <body style="background-color:#d9fcd9;">
    
        <div class="container" style="width:40%; background-color:#d0d3d8;  border-radius: 20px; margin-top:50px;"><br>
            <h2 class="text-center" style="color:#ffffff; background-color:#d31d4e; border-radius: 15px;">Student Login</h2><br>
            <form action="login_varify.php"  method="POST">

                
                <div class="form-group">
                <label>*Email:</label>
                <input type="email" 	name="email" id="email" class="form-control" style="border-radius:10px;">
                <span id="emailerror" class="text-danger font-weight-bold"> </span>
                </div>
                
                <div class="form-group">
                <label>*Password:</label>
                <input type="password" 	name="password" id="password" class="form-control" style="border-radius:10px;">
                <span id="passworderror" class="text-danger font-weight-bold"> </span>
                </div><br>
                
                
                <div class="col-md-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Sign in"><br>
                </div>
                <div class="col-md-9" style="margin-top:15px;">
                <a href="#"> Forget Password </a>
                </div>

                 <div class="col-md-12"><br>
                    <h5>Not registered yet! <a href="student_registration.php"> Create New Account </a> </h5><br>
                </div>



            </form>  
        </div>
    </body>
</html>
