
//server side validation

function regular_validation(){
	
	var username=document.getElementById('username').value;
	var email=document.getElementById('email').value;
	var password=document.getElementById('password').value;
	var cpassword=document.getElementById('cpassword').value;
	var mobilenumber=document.getElementById('mobilenumber').value;

	// checkin using regular expression 
	
	
var usercheck= /^[A-Za-z. ]{3,30}$/;                                        
     
var emailcheck= /^[A-Za-z_0-9]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/; 

var passwordcheck=  /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;

var mobilecheck= /^[789][0-9]{9}$/;


 // username section 	
	
   if(usercheck.test(username)){
		
	document.getElementById('usererror').innerHTML="";
	}else{
        document.getElementById('usererror').innerHTML="** username is invalid";
		
		return false;
	}
	
 
//conform password section
	
	
if(password==cpassword){
	    
	    document.getElementById('cpassworderror').innerHTML="";
	}else{
        document.getElementById('cpassworderror').innerHTML=" ** password not matched ";
		
         return false;
 	}

  //email section
	
	if(emailcheck.test(email)){
	    
	    document.getElementById('emailerror').innerHTML="";
	}else{
        document.getElementById('emailerror').innerHTML=" ** Email is invalid";
		return false;
	}

	 //password section 
	
	 if(passwordcheck.test(password)){
	    
	    document.getElementById('passworderror').innerHTML="";
	}else{
        document.getElementById('passworderror').innerHTML=" ** password  is invalid";
		return false;
	}
	

//mobile section 
	
	if(mobilecheck.test(mobilenumber)){
	    
	    document.getElementById('mobileerror').innerHTML="";
	}else{
        document.getElementById('mobileerror').innerHTML=" ** mobile number  invalid";
		
		return false;
	}
	
 }
	
	
	
	
