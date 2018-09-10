<!DOCTYPE html>
<html>
<head>
	<title></title>

	
</head>
<body>
	
<div id="container">
	<a href="2main.php?page=1">1.php</a><br>
	<a href="2main.php?page=akshay_abstractbuilder">akshay_abstractbuilder.php</a><br>
	<a href="2main.php?page=akshay_abstractfactory">akshay_abstractfactory.php</a><br>


</div>
<div id="demo">
	
<?php
	try{
		if(empty($_GET['page']))
		{
			echo "hi i am goutam palkar new developer";
		}
	     else
	     {
           $p=$_GET['page'];

	        $page="$p.php";
	
				if(file_exists($page))
				{
				  include($page);
				}
	
				else if($p=="")
				{
				    
				  echo "this is home page";

				}	
				else
				{
				  echo "what are a looking for";
				
			 	}
          }
   }
	catch (Exception $e)
		{
        echo $e->getMessage();
	}

?>

</div>


</body>
</html>