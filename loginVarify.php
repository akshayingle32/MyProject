<?php

/*here we started the session*/

session_start();


include('db_Config.php');


    $email=$_POST['email'];
    $password=$_POST['pass'];

    $sql = "SELECT * FROM userregistration WHERE RegEmail='".$email."' AND
    RegPswd='".$password."'";

    $res =mysql_query($sql) or die("error to find data".mysql_error());

    $num_rows=mysql_num_rows($res);


    if($num_rows==1)
    
    {
        /*user is session name*/
      
        $query="SELECT id FROM `userregistration` WHERE RegEmail='".$email."'";
        $user=mysql_query($query);
        $session_user=mysql_result($user,0,0);
        //echo $session_user;
        $_SESSION['user'] = $session_user;
        header('location:user_profile.php');
            exit;
       

    }
    else
    {
       echo "login failed";
}
    ?> 