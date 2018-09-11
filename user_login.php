<?php
//var_dump($_SESSION);
session_start();
?>


<html>
    <head>
<style>

    .b{float: right;}
    body{
        
        background-color: skyblue;}
      
    </style>
        
   <meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
    </head>
    
    
    <body>
        
    
    
    
    <br>
        <div class="container">
 
        <!--<div class="alert alert-success"><?php echo $_SESSION['message']; ?></div>-->
       
        <div class="b">
      <a href="user_registration.php">   <input type="button"
class="btn btn-primary" value="Sign up">  </a></div>

    
 <div class="container">
    <h1 align="center" > Welcome to User Login  </h1><br><br>
            
    <form action="loginVarify.php" method="POST">
        <div class="form-group">
       
        <label>Email: </label>
        <input type="email" name="email" class="form-control" >

         </div>
         <div class="form-group">
        <label>Password: </label>
        <input type="password" name="pass" class="form-control">

        </div>
        <input type="submit"  class="btn btn-primary" value="Login">   <br><br>
          </form>
        </div>
    </div>
    </body>
</html>
