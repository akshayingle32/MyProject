
<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/user_validation.js"></script>
    
    </head> <br>
       
            
    <div>        
    
    </div>
	 
    <body style="background-color:#d9fcd9;">
    
        <div class="container" style="width:40%; background-color:#d0d3d8;  border-radius: 20px; margin-top:50px;"><br>
            <h2 class="text-center" style="color:#6b96db; background-color:#dfff60; border-radius: 15px;">Student Registration</h2><br>
            <form action="index.php" onsubmit="return regular_validation()" method="post">

                <div class="form-group">
                <label>*Name:</label>
                <input type="text" name="user" id="username" class="form-control">
                <span id="usererror" class="text-danger font-weight-bold"></span>
                </div>
                
                <div class="form-group">
                <label>*Email:</label>
                <input type="email" 	name="email" id="email" class="form-control">
                <span id="emailerror" class="text-danger font-weight-bold"> </span>
                </div>
                
                <div class="form-group">
                <label>*Password:</label>
                <input type="password" 	name="pass" id="password" class="form-control">
                <span id="passworderror" class="text-danger font-weight-bold"> </span>
                </div>
                
                <div class="form-group">
                <label>*mobile No:</label>
                <input type="text" 	name="mobile" id="mobilenumber" class="form-control">
                <span id="mobileerror" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label >*Course:</label>
                        <select id="ddlView" name="couse">    
                            <option value="Enginnering" selected>Enginnering</option>
                            <option value="BCA">BCA</option>
                            <option value="BSC">BSC</option>
                        </select>  
                </div>    <br>
                
                <input type="submit" name="submit" class="btn btn-primary" value="Register">
                
                    <h5>Already have an Account? <a href="login.php"> Sign in </a> </h5><br>
                



            </form>  
        </div>
    </body>
</html>