<html><head><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script></head>
  
  <body>

  hello
	<?php
       session_start();
       include('db_config.php');
        
 if(!empty( $_SESSION['user']))
  {
       $user=$_SESSION['user'];
         
       $sql="select id from userregistration where id ='".$user."'";
        $query=mysqli_query($con,$sql);
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
		 </thead><tbody>";
		    $q1=mysqli_query($con,"select id, RegName, RegMob, RegEmail, RegCourse from userregistration where id='".$userName."'");
	   			 $numRows=mysqli_num_rows($q1);
			    for($i=0; $i<$numRows; $i++)
			    {
			    	echo "<tr>";
			    	for($j=0; $j<=4; $j++)
			    	{
			      
			        echo "<td>".$id=mysqli_result($q1,$i,$j)."</td>";
			       
			         }
	           }
	            echo "</tbody>  </table>";
	    }       
    else
    {
    	header('location:user_login.php');
    	//echo "login failed";
    }
}
else
{
	header('location:user_login.php');
	//echo "login failed2";
}
?>

</body></html>