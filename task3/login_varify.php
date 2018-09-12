<?php

/*here we started the session*/

session_start();

/* here is database file add*/
//include('db_Config.php');

if ($_SERVER['REQUEST_METHOD']=="POST")
{
    if (!empty($_POST['email'])
     {  
      $email=$_POST['email'];
     }
     else
     {

     }
     if (!empty($_POST['pass'])
     {  
       $pass=$_POST['pass'];
     }
     else
     {
        
     }
   
}
elseif ($_SERVER['REQUEST_METHOD']=="GET") 
{
    if (!empty($_GET['email'])
     {  
      $email=$_GET['email'];
     }
     else
     {

     }
     if (!empty($_GET['pass'])
     {  
       $pass=$_GET['pass'];
     }
     else
     {
        
     }
   
}
elseif ($_SERVER['REQUEST_METHOD']=="REQUEST") 
{
      if (!empty($_REQUEST['email'])
     {  
      $email=$_REQUEST['email'];
     }
     else
     {

     }
     if (!empty($_REQUEST['pass'])
     {  
       $pass=$_REQUEST['pass'];
     }
     else
     {
        
     }
    
}

$table_name= "";


   // echo $email."<br>".$password."<br>";
    $sql = "SELECT * FROM ".$table_name." WHERE RegEmail='".$email."' AND
   RegPswd='".$password."'";

    $result =mysqli_query($con,$sql);
    if (!$result)
      {
        die("no data selected:".mysql_error());
      }
    else
      {
         $rows=mysqli_fetch_array($result,MYSQLI_NUM);
        printf ("%s (%s)\n",$row[0],$row[1]);
        $num_rows=mysqli_num_rows($result);


            if($num_rows==1)
            
            {
                /*user is session name*/
              
                $query="SELECT id FROM `userregistration` WHERE RegEmail='".$email."'";
                $user=mysqli_query($con,$query);
                $session_user=mysqli_result($user,0,0);
                //echo $session_user;
                $_SESSION['user'] = $session_user;
                

                   /* when user login is sucessefull, page redirect to dashbord */
                //header('location:user_profile.php');
                    exit;
               

            }
            else
            {
                /* when user login is failed, page redirect to login */
              $_SESSION['message'] = "please enter valid fields";
                //header('location:user_login.php');
            }

}
  

?> 
    
   