<?php

/*here we started the session*/

session_start();

/* here is database file add*/
include('db_Config.php');

if ($_SERVER['REQUEST_METHOD']=="POST")
{
    if (!empty($_POST['email']))
     {  
      $email=$_POST['email'];
     }
     else
     {

     }
     if (!empty($_POST['password']))
     {  
       $pass=$_POST['password'];
     }
     else
     {
        
     }
   
}
elseif ($_SERVER['REQUEST_METHOD']=="GET") 
{
    if (!empty($_GET['email']))
     {  
      $email=$_GET['email'];
     }
     else
     {

     }
     if (!empty($_GET['password']))
     {  
       $pass=$_GET['password'];
     }
     else
     {
        
     }
   
}
elseif ($_SERVER['REQUEST_METHOD']=="REQUEST") 
{
      if (!empty($_REQUEST['email']))
     {  
      $email=$_REQUEST['email'];
     }
     else
     {

     }
     if (!empty($_REQUEST['password']))
     {  
       $pass=$_REQUEST['password'];
     }
     else
     {
        
     }
    
}
//$email="goutampalkar@gmail.com";
// $pass="palkar@321";
$table_name= "student_info";


   // echo $email."<br>".$password."<br>";
     $sql = "SELECT * FROM ".$table_name." WHERE email='".$email."'";
     $sql_p = "SELECT * FROM ".$table_name." WHERE  password='".$pass."'";
   
     $r1 =mysqli_query($con,$sql);
    $r2= mysqli_query($con,$sql_p);
    
    $rows1=mysqli_fetch_array($r1,MYSQLI_NUM);
    $rows2=mysqli_fetch_array($r2,MYSQLI_NUM);
    
    if (!$rows1)
      {
        //die("no data selected:".mysql_error());
        $_SESSION['message']="Invalide user id";
        header('location:student_login.php');
        //echo " email";
      }
      elseif (!$rows2)
       {
         $_SESSION['message']="Invalide user password";
         header('location:student_login.php');
         //echo "password";
      }
      elseif (!$rows1 && !$rows2) {
            //echo "both";
          # code...
        $_SESSION['message']="Invalide user id and password";
        header('location:student_login.php');
      }

    else
      {
          $sql_main = "SELECT * FROM ".$table_name." WHERE email='".$email."' AND password='".$pass."'";
    $result=mysqli_query($con,$sql_main);
        $num_rows=mysqli_num_rows($result);
   

            if($num_rows==1)
            
            {
                /*user is session name*/
              
                $query="SELECT id FROM ".$table_name." WHERE email='".$email."'";
                $result2=mysqli_query($con,$query);
                $user=mysqli_fetch_array($result2,MYSQLI_NUM);
                $session_user=$user[0];
                echo $session_user;
                 $_SESSION['user'] = $session_user;
                

                   /* when user login is sucessefull, page redirect to dashbord */
                header('location:user_dashboard.php');
                    exit;
               

            }
            else
            {
                /* when user login is failed, page redirect to login */
              $_SESSION['message'] = "please enter valid fields";
                header('location:student_login.php');

                echo "login failed";
            }

}
  

?> 
    
   