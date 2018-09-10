<?php


/*here we started the session*/

session_start();


include('dbcon.php');

if(isset($_GET['email']))

{
    $email=$_GET['email'];
    $password=$_GET['pass'];

    $sql = "SELECT * FROM user_register WHERE email='".$email."' AND
    password='".$password."'";

    $res =mysql_query($sql) or die("error to find data");

    $num_rows=mysql_num_rows($res);


    if($num_rows==1)
    
    {
        /*user is session name*/

        $_SESSION['user'] = $email;
        header('location:userprofile.php');
            exit;

    }
    else
    {


    ?> <script> alert("invalid user name or password"); </script>

<?php
    }

    }
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
 
    </head><br>
    <div class="b">
      <a href="index.php">   <input type="button"
class="btn btn-primary" value="Sign up">  </a></div>

    <body>
 <div class="container">
    <h1 align="center" > Welcome to User Login  </h1><br><br>
            
    <form action="login.php" method="get">
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
    </body>
</html>
