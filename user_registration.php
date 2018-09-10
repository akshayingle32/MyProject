<!doctype html>
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
   
    </style>  <!--
<script>
  
    function simplevalidation(){
   
    var name=document.getElementById('name').value;
    var password=document.getElementById('password').value;
    var conpassword=document.getElementById('conpassword').value;
    var email=document.getElementById('email').value;
    var mobileno=document.getElementById('mobile').value;
   
   
   
   
    //Name Section
   
    var usercheck=/^[A-Za-z 0-9]{3,10}$/;
    if(name==""){
        document.getElementById('usererror').innerHTML="must be filled";

    }
    if((usercheck).test(name))
    {
      document.getElementById('usererror').innerHTML="";
    }else{
     document.getElementById('usererror').innerHTML="invalid username";
     return false;
    }
   
   
    //Password Section
   
    var passcheck=/^[A-Za-z.]{3,}$/;
    if((passcheck).test(password))
    {
     document.getElementById('passerror').innerHTML="";
    }else{
     document.getElementById('passerror').innerHTML="invalid password";
     return false;
    }
   

   
     if((password).match(conpassword)){
     
     document.getElementById('conpasserror').innerHTML="";
     
     }else{
     
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
 
   
        document.getElementById('s1').innerHTML="Your Registration is succssfull. ";
        return false;
   
   
   
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

//onfocus event for text fields
function myFunction2(x) {
    x.style.background = "#ffc02a";
    }
   
    function myFunction3(x) {
    x.style.background = "#ffc02a";
    }
   
    function myFunction4(x) {
    x.style.background = "#ffc02a";
    }
   
    function myFunction5(x) {
    x.style.background = "#27ff64";
    }
   
    function myFunction6(x) {
    x.style.background = "#27ff64";
    }
   
    function myFunction7(x) {
    x.style.background = "#27ff64";
    }
   
   


</script>

 -->
</head>
<body>

   
        <h1><center>Registration Form:</center></h1>
        <div class="container">
<<<<<<< HEAD
    <form action="user_registration.php" onsubmit="return simplevalidation()" >
=======
    <form action="user_Reg_Var.php" method="POST" onsubmit="return simplevalidation()" >
>>>>>>> 1291a316ab564c939d8fce157df20ceaf1d218d6
       
        <div class="form-group">
        <label >*Name:</label>
        <input type="text" class="form-control" name="RegName" id="name" placeholder="Enter name" onfocus="myFunction2(this)" required>
        <span id="usererror" class="text-danger font-weight-bold" > </span>
        </div>
       
        <div class="form-group">
        <label >*Password:</label>
        <input type="password" class="form-control" name="RegPass" id="password" placeholder="Enter password" oninput="myFunction1()" onfocus="myFunction3(this)">
        <span id="passerror" class="text-danger font-weight-bold" > </span>
        <h6>Password must be at least three characters including alphanumeric and Special Symbols.</h6>
        </div>
       
        <div class="form-group">
        <label >*Confirm Password:</label>
        <input type="text" class="form-control" name="RegConfPass" id="conpassword" placeholder="Confirm password" onfocus="myFunction4(this)" />
        <span id="conpasserror" class="text-danger font-weight-bold" > </span>
        </div>   
       
                <div class="d1">
                    <img src="ashok1.jpg">
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
       
<<<<<<< HEAD
         <div class="container">    
         <label >*Course:</label> 
            <form>
                <div class="checkbox">
                     <label><input type="checkbox" id="mobile" value="">Enginnering</label>
                </div>
                <div class="checkbox">
                     <label><input type="checkbox" id="mobile" value="">MCA</label>
                 </div>
                <div class="checkbox">
                     <label><input type="checkbox" id="mobile" value="" disabled>BCA</label>
                </div>
            </form>
=======
        <div class="form-group">
        <label >*Course:</label>
        <input type="text" class="form-control" name="RegCourse" id="mobile" placeholder="Enter mobile" onfocus="myFunction7(this)">
        <span  id="mobileerror" class="text-danger font-weight-bold" > </span>
>>>>>>> 1291a316ab564c939d8fce157df20ceaf1d218d6
        </div>
   
       
       
        <input type="submit" class="btn btn-primary" value="Submit" onmouseover="bigImg(this)" onmouseout="normalImg(this)"  width="32" height="32">
        <span id="s1" ></span>
        </form>
    </div>   
   
</body>

</html>


	
	
	
