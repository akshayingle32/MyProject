<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>Panel Heading</h2>
  <div class="panel panel-default">
    <div class="panel-heading">Panel Heading</div>
     <div class="panel-body">
      <?php
        if(!empty( $_SESSION['user']))
         {
           $user=$_SESSION['user'];
           $table_name="";

           $sql1="select id from ".$table_name." where id ='".$user."'";

           $query=mysqli_query($con,$sql,$sql1);

           $userName=mysqli_result($query,0,0);

            if($user==$userName)
            {
              echo "<a href='user_logout.php'>logout</a>";
              echo "<table class='table table-hover'>
               <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME OF STUDENT</th>
                  <th>MOBILE NUMBER</th>
                  <th>Email Addrees</th>
                   <th>Coures</th>
                </tr>
               </thead>
               <tbody>";
               $sql2="select id, RegName, RegMob, RegEmail, RegCourse from ".$table_name." where id='".$userName."'";

                $result1=mysqli_query($con,$sql2);

                 $rows1=mysqli_fetch_array($result1,MYSQLI_NUM);
                  printf ("%s (%s)\n",$rows1[0],$rows1[1]);
                  $num_rows=mysqli_num_rows($result1);
              }
              
              else
              {
                //header('location:user_login.php');
                echo "login failed";
              }
}
else
{
  //header('location:user_login.php');
  echo "login failed2";
}




    </div>
  </div>
</div>

</body>
</html>
