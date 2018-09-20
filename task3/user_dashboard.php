<?php
session_start();
include("db_Config.php");
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Student dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <div><a href='logout.php'>logout</a></div>
  <h2>Panel Heading</h2>
  <div class="panel panel-default">
    <div class="panel-heading">Student DashBoard</div>
     <div class="panel-body">
      <?php

        if(!empty( $_SESSION['user']))
         {
           $user=$_SESSION['user'];
           
           $table_name="student_info";

           $sql1="select id from ".$table_name." where id ='".$user."'";

           $query=mysqli_query($con,$sql1);

           $u=mysqli_fetch_array($query,MYSQLI_NUM);
           $user_name=$u[0];
            if($user==$user_name)
            {
              
              echo "<table class='table table-hover'>
               <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME OF STUDENT</th>                  
                  <th>Email Addrees</th>
                  <th>Password</th>
                  <th>MOBILE NUMBER</th>
                   <th>Coures</th>
                </tr>
               </thead>
               <tbody>";

                $sql2="select `id`, `name`, `email`, `password`, `mobileno`, `course` from ".$table_name." WHERE id=".$user_name."";

                $result1=mysqli_query($con,$sql2);
                if(!$result1)
                {
                  die("result failed:".mysql_error());

                }
                else
                {              

                 $rows1=mysqli_fetch_array($result1,MYSQLI_NUM);
                  echo "<tr><td>
                  ".$rows1[0]."</td><td>
                  ".$rows1[1]."</td><td>
                  ".$rows1[2]."</td><td>
                  ".$rows1[3]."</td><td>
                  ".$rows1[4]."</td><td>
                  ".$rows1[5]."</td></tr>
                  </tbody></table>";
                  
                }
              }
              else
              {
                //header('location:user_login.php');
                echo "login failed";
              }
          }
          else
          {
            header('location:student_login.php');
            //echo "login failed2";
          }


?>

    </div>
  </div>
</div>

</body>
</html>
