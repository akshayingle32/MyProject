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
    $sql = "SELECT * FROM ".$table_name." WHERE email='".$email."' AND
   password='".$pass."'";

    $result =mysqli_query($con,$sql);
    if (!$result)
      {
        //die("no data selected:".mysql_error());
        $_SESSION['message']="Invalide filed";
      }
    else
      {
         $rows=mysqli_fetch_array($result,MYSQLI_NUM);
        //echo "<br>".$rows[0].$rows[1].$rows[2].$rows[3];
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

                //echo "login failed";
            }

}
  

?> 
    
   