
<?php
/* here session is start*/
session_start();
/* here session is destroyed*/
session_destroy();

/*here user session are destroyed when page redirect to login */
header("Location:user_login.php");
       
?>