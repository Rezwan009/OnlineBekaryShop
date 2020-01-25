function formValidation()
{

var firstname = document.registration.firstname;
var lastname = document.registration.lastname;
var username = document.registration.username;

var address = document.registration.address;

var email = document.registration.email;

var password_1 = document.registration.password_1;
var password_2 = document.registration.password_2;
var genderM = document.registration.gender;
var genderF = document.registration.gender;
var genderO = document.registration.gender;
var phoneCode = document.registration.phoneCode;
var phonenumber = document.registration.phonenumber;


if(passid_validation(password_1,7,12))
 {
   if(allLetter(firstname))
   {
    if(allLetter1(lastname))
    {
     if(allLetter2(username))
     {
       if(alphanumeric(address))
       {
         if(ValidateEmail(email))
         {
           if(validsex( genderM,genderF,genderO))
           {
            if(allnumeric1(phoneCode))
            {

              if(allnumeric(phoneCumber))
              {
}
} 
}
} 
}
}
}
}
}

return false;

} 
function passid_validation(password_1,mx,my)
{
var passid_len = password_1.value.length;
if (passid_len == 0 ||passid_len >= my || passid_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
password_1.focus();
return false;
}else if(password_1!=password_2){
  alert("The twopassword dont match");

}
return true;
}

//firstname check

function allLetter(firstname)
{ 
var letters = /^[A-Za-z]+$/;
if(firstname.value.match(letters))
{
return true;
}
else
{
alert('firstname must have alphabet characters only');
firstname.focus();
return false;
}
}

//lastname check
function allLeter1(lastname)
{
  var letters = /^[A-Za-z]+$/;
if(lastname.value.match(letters))
{
return true;
}
else
{
alert('lastname must have alphabet characters only');
lastname.focus();
return false;
}

}

//username check
function allLetter2(username)
{ 
var letters = /^[A-Za-z]+$/;
if(username.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
username.focus();
return false;
}
}

//email check
function ValidateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}

//address check
function alphanumeric(address)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(address.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
address.focus();
return false;
}
}

//phonecode check
function allnumeric1(phoneCode)
{ 
var numbers = /^[0-9]+$/;
if(phoneCode.value.match(numbers))
{
return true;
}
else
{
alert('phoneCode  must have numeric characters only');
phoneCode.focus();
return false;
}
}
//phone number check
function allnumeric(phonenumber)
{ 
var numbers = /^[0-9]+$/;
if(phonenumber.value.match(numbers))
{
return true;
}
else
{
alert('Phonenumber  must have numeric characters only');
phonenumber.focus();
return false;
}
}


 function validsex(genderM,genderF,genderO)
{
x=0;

if(genderM.checked) 
{
x++;
} if(genderF.checked)
{
x++; 
}
if(genderO.checked)
{
x++; 
}
if(x==0)
{
alert('Select Male/Female or Other');
genderM.focus();
return false;
}
else
{
alert('Form Succesfully Submitted');
window.location.reload()
return true;
}
}