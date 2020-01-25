function validateForm(form) {
                  var firstname = document.forms["myForm"]["firstname"].value;
                  var lastname = document.forms["myForm"]["lastname"].value;
                  var username = document.forms["myForm"]["username"].value;
                  var email = document.forms["myForm"]["email"].value;
                  var password_1 = document.forms["myForm"]["password_1"].value;
                  var password_2 = document.forms["myForm"]["password_2"].value;
                  var genderM = document.myForm.genderM;
                  var genderF = document.myForm.genderF;
                  var genderO = document.myForm.genderO;
                  var phoneCode = document.forms["myForm"]["phoneCode"].value;
                  
     //Firstname validation
      if(firstname == ""){
               alert(" ** Please fill the firstname field");
                return false;
            }
            if((firstname.length <= 2) || (firstname.length > 20)) {
             alert( " ** firstname lenght must be between 2 and 20");
                return false;   
            }
            if(!isNaN(firstname)){
               alert(" ** only characters are allowed");
                return false;
            }

    //Lastname validation
            if(lastname == ""){
                alert(" ** Please fill the lastname field");
                return false;
            }
            if((lastname.length <= 2) || (lastname.length > 20)) {
               alert(" ** lastname lenght must be between 2 and 20");
                return false;   
            }
            if(!isNaN(lastname)){
               alert(" ** only characters are allowed");
                return false;
            }


       //USer Name validation

            if(username == ""){
                alert(" ** Please fill the username field");
                return false;
            }
            if((username.length <= 2) || (username.length > 20)) {
               alert(" ** username lenght must be between 2 and 20");
                return false;   
            }
            if(!isNaN(username)){
               alert(" ** only characters are allowed");
                return false;
            }




//Email validation
            if(email == ""){
                alert(" ** Please fill the email idx` field");
                return false;
            }
            if(email.indexOf('@') <= 0 ){
                alert(" ** @ Invalid Position");
                return false;
            }

            if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
              alert( " ** . Invalid Position");
                return false;
            }




//Password 1  validation
            if(password_1 == ""){
              alert(" ** Please fill the password field");
                return false;
            }
            if((password_1.length <= 5) || (password_1.length > 20)) {
              alert(" ** Passwords lenght must be between  5 and 20");
                return false;   
            }

//Check  two password match or not?
            if(password_1!=password_2){
                alert(" ** Password does not match the confirm password");
                return false;
            }
  //Password_2 validation          
            if(password_2 == ""){
                alert(" ** Please fill the confirmpassword field");
                return false;
            }



//Gender validation
if(validsex(genderM,genderF)){}
  
         function validsex(genderM,genderF,genderO)
            {
                 x=0;

            if(genderM.checked) 
           {
               x++;
           } 
           if(genderF.checked)
            {
              x++; 
            }
             if(genderO.checked)
            {
              x++; 
            }
           if(x==0)
            {
             alert('Select Male/Female/Other');
             genderM.focus();
            return false;
           }
           else
            {
              alert('Form Successfully Submitted');
              window.location.reload()
               return true;
           }

      }
      
//Phone code validation
        if(phoneCode == ""){
                alert(" ** Please fill the Phone Code NUmber field");
                return false;
            }
            if(isNaN(phoneCode)){
                alert(" ** user must write digits only not characters") ;
                return false;
            }
            if(phoneCode.length!=10){
                alert(" ** Phone Code Number must be 10 digits only");
                return false;
            }


}