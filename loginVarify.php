<?php

/*here we started the session*/

session_start();


include('db_Config.php');


    $email=$_POST['email'];
    $password=$_POST['pass'];
   // echo $email."<br>".$password."<br>";
    $sql = "SELECT * FROM userregistration WHERE RegEmail='".$email."' AND
   RegPswd='".$password."'";

    $res =mysqli_query($con,$sql);
    // $display=mysqli_result($res,0,0);
    // echo $display."<br>";

    // var_dump($res);
    // if(!$res)
    //    {

    //     $msg = die("error to find data".mysql_error());
    //    $_SESSION['message']= $msg;
    //      header('location:user_  header('location:user_profile.php');.php'); 

    //    }
    $num_rows=mysqli_num_rows($res);


    if($num_rows==1)
    
    {
        /*user is session name*/
      
        $query="SELECT id FROM `userregistration` WHERE RegEmail='".$email."'";
        $user=mysqli_query($con,$query);
        $session_user=mysqli_result($user,0,0);
        //echo $session_user;
        $_SESSION['user'] = $session_user;
        
        header('location:user_profile.php');
            exit;
       

    }
    else
    {
      $_SESSION['message'] = "please enter valid fields";
        header('location:user_login.php');
    }

    ?> 
    
   