<?php
 session_start();
?><!doctype html>
<html>
    <head>
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <style>

                .d1{
                
                    margin-left:500px;
                    margin-top:26px;
                    }
            
                </style>  
<<<<<<< HEAD
            <script>

                    

            
=======
                 <script>
        
>>>>>>> 597b2bbc885429d749094a6a04750e2955518c00
                function simplevalidation(){
            
                var name=document.getElementById('name').value;
                var password=document.getElementById('password').value;
                var conpassword=document.getElementById('conpassword').value;
                var email=document.getElementById('email').value;
                var mobileno=document.getElementById('mobile').value;
            
            
            
            
                //Name Section
            
                var usercheck=/^[A-Za-z 0-9]{3,10}$/;
                if(name==""){
                    document.getElementById('usererror').innerHTML="**must be filled";

                }

                if((usercheck).test(name))
                {
                document.getElementById('usererror').innerHTML="";
                }else{
                document.getElementById('usererror').innerHTML="invalid username";
                 return false;
                }
            
            
                //Password Section
            
                var passcheck=/^[A-Za-z0-9]{3,10}$/;

                if((passcheck).test(password))
                {
                document.getElementById('passerror').innerHTML="";
                }else{
                document.getElementById('passerror').innerHTML="invalid password";
                return false;
                }
                //confirm pass

                       if((password).match(conpassword)){
                        
                        document.getElementById('conpasserror').innerHTML="";
                        

                        }


                        else{
                        
                            document.getElementById('conpasserror').innerHTML="password not match";
                            return false;
                        }
                    
                //Email Section
            
            
                var emailcheck=/^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
                        //akshay_Injha@gmail.co.in
            
                if((emailcheck).test(email))
                {
                document.getElementById('emailerror').innerHTML="";
                }else{
                document.getElementById('emailerror').innerHTML="invalid email";
                return false;
                }
            
                //Mobile Section
            
            
                var mobilecheck=/^[789][0-9]{9}$/;
                if((mobilecheck).test(mobileno))
                {
                document.getElementById('mobileerror').innerHTML="";
                }else{
                document.getElementById('mobileerror').innerHTML="invalid mobile Number ";
                return false;
                }
            
            
                   
                }
                
                    // Mouseonover and mouseonout events on Submit button

                    function bigImg(x) {
                        x.style.height = "64px";
                        x.style.width = "152px";
                    }

                    function normalImg(x) {
                        x.style.height = "32px";
                        x.style.width = "100px";
                    }

                    // oninput for password
                    function myFunction1() {
                        var x = document.getElementById("password").value;
                        document.getElementById("passerror").innerHTML = "You wrote: " + x;
                    }


                        //alert for registration successful
        
                function myFunction22() {
                    alert("registration successful!");
                    window.location.href='user_login.php';
                }



            </script>
    </head>
    <body>
<<<<<<< HEAD
        <div>
            <?php
            include('alertBox.php');
              if(!empty($_SESSION['register_error']))
              {
                $msg = $_SESSION['register_error']; 
                echo "<script type='text/javascript'>";
                echo "alert_box(".$msg.")";
                echo "</script>";
              }
              else
              {
                echo "This is Registration Form";
              }     
            ?>
=======
        <!-- <div class="alert alert-success">
            <!-- <?php
            //   if(!empty($_SESSION['message']))
            //   {
            //     echo $_SESSION['message']; 
            //   }
            //   else
            //   {
            //     echo "This is Registration Form";
            //   }     
            ?> -->
>>>>>>> adab5be90b04c07d42ca8623c906ccdc311f1f45
             
         </div>
        <h1><center>Registration Form:</center></h1>
            <div class="container">

        <!-- <form action="user_registration.php" onsubmit="return simplevalidation()" > -->
        <!-- <form action="user_Reg_Var.php" method="POST" onsubmit="return simplevalidation()" > -->

        <form action="user_Reg_Var.php" method="POST" onsubmit="return simplevalidation()" >
       
            <div class="form-group">
            <label >*Name:</label>
            <input type="text" class="form-control" name="RegName" id="name" placeholder="Enter name" onfocus="myFunction2(this)" required>
            <span id="usererror" class="text-danger font-weight-bold" > </span>
            </div>
        
            <div class="form-group">
            <label >*Password:</label>
            <input type="password" class="form-control" name="RegPass" id="password" placeholder="Enter password" oninput="myFunction1()" onfocus="myFunction3(this)" required>
            <span id="passerror" class="text-danger font-weight-bold" > </span>
            <h6>Password must be at least three characters including alphanumeric and Special Symbols.</h6>
            </div>
        
            <div class="form-group">
            <label >*Confirm Password:</label>
            <input type="text" class="form-control" name="RegConfPass" id="conpassword" placeholder="Confirm password" onfocus="myFunction4(this)" required />
            <span id="conpasserror" class="text-danger font-weight-bold" > </span>
            </div>   
        
            <div class="form-group">
            <label >*email:</label>
            <input type="email" class="form-control" name="RegMail" id="email" placeholder="Enter email" onfocus="myFunction5(this)">
            <span id="emailerror" class="text-danger font-weight-bold" > </span>
            </div>
        
            <div class="form-group">
            <label >*Mobile:</label>
            <input type="text" class="form-control" name="RegNum" id="mobile" placeholder="Enter mobile" onfocus="myFunction6(this)">
            <span  id="mobileerror" class="text-danger font-weight-bold" > </span>
            </div>
        
            <div class="form-group">
            <label >*Course:</label>
                    <select id="ddlView" name="RegCouse">
                    
                        <option value="Enginnering" selected>Enginnering</option>
                        <option value="BCA">BCA</option>
                        <option value="BSC">BSC</option>
                    </select>  
            </div>    

            
           
            <br><br>
            <div>
                <input type="submit" class="btn btn-primary" value="Submit" onclick="myFunction222
                
                ()">
                 
            </div>   
       
            
            <div class="b">
                <a href="user_login.php">   <button class="btn btn-primary" value="Sign up" > Sign up</button> </a>
            </div>
       </form>
    </body>

</html>


