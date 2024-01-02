const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

var loginUsername=document.getElementById('loginUsername');


var loginPassword=document.getElementById('loginPassword');



var signupUsername=document.getElementById('signupName');
var Userregx=/^[a-zA-Z]{1}(\d||[a-zA-Z]||){1,19}$/

var signuPassword=document.getElementById('signupPassword');
var passwordregx =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,20}$/

var Fname = document.getElementById('Fname');
var Lname = document.getElementById('Lname');
var nameregx = /^[A-Za-z]{2,20}$/

var DOB = document.getElementById('DOB');
var DOBregx=/^(?:19[0-9][0-9]|200[0-9]|201[0-9]|202[0-2])([-])(?:0[1-9]|1[012])([-])(?:0[1-9]|[12]\d|3[01])$/;

var signupEmail=document.getElementById('email');
var emailregx=/^[a-zA-Z0-9][\w.-]*@[a-zA-Z0-9-]+(?:\.[a-zA-Z]{2,})+$/;

var signupPhoneNumber=document.getElementById('phonenumber');
var phoneregx=/^\d{7,15}$/

var keyC=document.getElementById('keyC');
var keyCregx=/^\d{1,5}$/

var house=document.getElementById('numberflat_house');
var road=document.getElementById('road');
var BLD=document.getElementById('BLD');
var addressregx=/^\d{1,7}$/

var gov=document.getElementById('gov');
var govregx=/^[A-Za-z]{2,20}$/

document.getElementById('loginForm').onsubmit= function (x)
{
if(loginUsername.value.trim()==""||loginPassword.value.trim()=="")
{
    if(loginUsername.value.trim()=="")
    {
        document.getElementById('loginUsernamespan').innerHTML="fill the above field"
    }
    else
    {
        document.getElementById('loginUsernamespan').innerHTML=""
    }
    if(loginPassword.value.trim()=="")
    {
        document.getElementById('loginpasswordspan').innerHTML="fill the above field"
    }
    else
    {
        document.getElementById('loginpasswordspan').innerHTML=""
    }
    x.preventDefault();
}

}
document.getElementById('signupForm').onsubmit= function (e)
{       
    
    if(!Userregx.test(signupUsername.value)|| !passwordregx.test(signuPassword.value)|| !emailregx.test(signupEmail.value) || !nameregx.test(Fname.value) ||!nameregx.test(Lname.value)|| !DOBregx.test(DOB.value)|| !phoneregx.test(signupPhoneNumber.value) || !keyCregx.test(keyC.value) || !addressregx.test(road.value) || !addressregx.test(BLD.value) || !addressregx.test(house.value) || !govregx.test(gov.value))
    {   
        
        if(!Userregx.test(signupUsername.value))
        {
            document.getElementById('signupUsernamespan').innerHTML="username should have at least 1 letter in the beginning" 
        }
        else
        {
            document.getElementById('signupUsernamespan').innerHTML="" 
        }
        
        if(!passwordregx.test(signuPassword.value))
        {
            document.getElementById('signuppasswordspan').innerHTML="At least 88 characters long.<br>Contains at least one lowercase letter.<br>Contains at least one uppercase letter.<br>Contains at least one digit.<br>Contains at least one special character from the specified set (@$!%*?&)."
        }
        else
        {
            document.getElementById('signuppasswordspan').innerHTML=""
        }
        
        if(!emailregx.test(signupEmail.value))
        {
            document.getElementById('emailspan').innerHTML="enter a valid email"
        }
        else
        {
            document.getElementById('emailspan').innerHTML=""
        }

        if(!nameregx.test(Fname.value))
        {
            document.getElementById('Fnamespan').innerHTML="only letters <br> 2 or more characters"
        }
        else
        {
            document.getElementById('Fnamespan').innerHTML=""
        }

        if(!nameregx.test(Lname.value))
        {
            document.getElementById('Lnamespan').innerHTML="only letters <br> 2 or more characters"
        }  
        else
        {
            document.getElementById('Lnamespan').innerHTML=""
        } 
           
        if(!DOBregx.test(DOB.value))
        {
            document.getElementById('DOBspan').innerHTML="Enter a valid date of birth 1900-2022"
        }
        else
        {
            document.getElementById('DOBspan').innerHTML=""
        }
        if(!keyCregx.test(keyC.value))
        {
            document.getElementById('keyspan').innerHTML="enter a valid key"
        }
        else
        {
            document.getElementById('keyspan').innerHTML=""
        }
        
        if(!phoneregx.test(signupPhoneNumber))
        {
            document.getElementById('phoneNspan').innerHTML="enter a valid phone number"
        }
        else
        {
            document.getElementById('phoneNspan').innerHTML=""
        }


        if( !addressregx.test(road.value) || !addressregx.test(BLD.value) || !addressregx.test(house.value) || ! govregx.test(gov.value))
        {
          document.getElementById('govspan').innerHTML="enter a valid address"  
        }
        else
        {
            document.getElementById('govspan').innerHTML="" 
        }
        e.preventDefault();  
        
    }

}