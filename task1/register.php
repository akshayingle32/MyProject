<html>
  <head>

<style>body#LoginForm{ background-image:url("bg.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 30px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-log {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;

}
.login-form  .btn.btn-reg {
  background: green none repeat scroll 0 0;
  border-color: green;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
  
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}
p{
  text-align: left;
}
</style> 
<script type="text/javascript">
  
  myFunction()
  {
      var mobileno=document.getElementById('mobile').value;
     var mobilecheck=/^[789][0-9]{9}$/;
                if((mobilecheck).test(mobileno))
                {
                document.getElementById('mobileerror').innerHTML="";
                }else{
                document.getElementById('mobileerror').innerHTML="invalid mobile Number ";
                return false;
                }

  }
</script> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
<body id="LoginForm">

<div class="container">

<h1 class="form-heading">Register Form</h1>
<div class="login-form">
<div class="main-div">
  
  <div class="panel">
   <h1>Register Here..</h1>  
   </div>

 
   <form id="Login" method="POST" action="user_Reg_Var.php">
    <p>Please enter your  Name:</p>  
        <div class="form-group">
             
          <input type="text" class="form-control" name="RegName" id="inputEmail" placeholder="First Name" required>    
        </div>

<p>Please enter your Mobile Number:</p>
         <div class="form-group">       
        <input type="text" class="form-control" onfocus="myFunction(this)" name="RegNum" id="mobile" placeholder="Mobile Number"required>  <span  id="mobileerror" class="text-danger font-weight-bold" > </span>    
         </div>   
    
<p>Please enter your Email:</p>
         <div class="form-group">       
          <input type="email" class="form-control" name="RegMail" id="inputPassword" placeholder="User Id"required>     
         </div>   
<p>Please enter your Password:</p>  
         <div class="form-group">     
          <input type="Password" class="form-control" name="RegPass" id="inputPassword" placeholder="Password"required>     
         </div>  
<p>Please enter your Confirm Password:</p>
         <div class="form-group">       
          <input type="Password" class="form-control" name="RegConfPass" id="inputPassword" placeholder="Confirm Password"required>     
         </div>  
         <p>Please enter your Couses:</p>
         <div class="form-group">
          <select name="RegCouse" class="form-control">
               
                <option value="1" selected>Enginnering</option>
                <option value="2">BCA</option>
                <option value="3">BSC</option>
            </select>  
                       
         </div>  

   <input type="submit" class="btn btn-log" value="Login">

    </form>
       
</div></div></div></div>


</body>
</html>
