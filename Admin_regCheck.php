<?php
session_start();
     // define variables and initialize with empty values

       $firstname=$lastname=$username=$email=$password_1=$password_2=$gender=$phonecode=$address=$phonenumber="";
       $firstnameErr=$lastnameErr=$usernameErr=$emailErr=$password_1Err=$password_2Err=$genderErr=$addressErr=$phonecodeErr=$phoneErr="";
       $phoneArr=array();
       $Mchecked = "";
       $Fchecked = "";
       $Ochecked = "";

  if (isset($_POST['submit'])) {

  
       $firstname= $_POST['firstname'];
       $lastname= $_POST['lastname'];
       $username= $_POST['username'];

       $email= $_POST['email'];
       $password_1= $_POST['password_1'];

       $password_2= $_POST['password_2'];

       $gender= $_POST['gender'];
       $phonecode= $_POST['phoneCode'];
       $address= $_POST['address'];
       $phonenumber= $_POST['phonenumber'];


    if(Validate_email($email)){


      if(Validate_firstname($firstname)){

        if(Validate_lastname($lastname)){


          if(Validate_username($username)){

            if(Validate_address($address)){

              if(Validate_gender($gender)){

                if(Validate_phonecode($phonecode)){
  


                  if(Validate_phonenumber($phonenumber)){

                  }
                }
              }
            }
          }
        }
      }
    }
    if($_POST['$password_1']!=$_POST['$password_2']){

      echo "Dont match"."</br>";
    }
     include'connect.php';

     if(mysqli_connect_error()){

        echo "'Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error()";
      }else{
          
          $email=$_POST['email'];

          $user_check_query = "SELECT Aemail From admin Where 'Aemail' =$email Limit 1";
          $result = mysqli_query($conn, $user_check_query);
          $user=count($result );
  
          if ($user['Aemail']===$email) {
               // if user exists
              
              header("location:Admin_Reg.php?status=Userexist");
            }else{

              $password = $password_1;//md5($password_1);//encrypt the password before saving in the database

              $query = "INSERT INTO admin (Afirstname, Alastname, Ausername,Aaddress,Aemail,Apassword,Agender,PhoneCode,PhoneNumber) 
              VALUES('$firstname','$lastname','$username','$address', '$email', '$password','$gender',' $phonecode','$phonenumber')";

              mysqli_query($conn, $query);
              echo "New record inserted sucessfully"."<br/>";
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in"."<br/>";
              header('location:AdminLogin.php');}
         } 




}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//gender validation
function Validate_gender($gender){



     if(!isset($_POST["gender"])){
         $genderErr ="empty gender <br/>";
    }
    else{
        $gender = $_POST["gender"];
        if ($gender == "M"){
            $Mchecked = "checked";
        }
        else if ($gender == "F"){
            $Fchecked = "checked";
        }else if($gender == "O"){
                $Ochecked = "checked";
        }
    }


}
//Email validation
function Validate_email($email){
      if (empty($_POST["email"])) {                       
         $emailErr = "Please enter  an email";
    }
    else {
        $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = "Invalid email format"; 
       }
    }

}

//Username validation

function Validate_firstname($firstname){

    //first name check
    if (empty($_POST["firstname"])) {
         $firstnameErr = "Please enter Firstname";
    }
    else {
        $firstname =test_input( $_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
           $firstnameErr = "Only letters and white space are allowed"; 
          }
    }
}



//Lastname validation

function Validate_lastname($lastname){

    if (empty($_POST["lastname"])) {                   
         $lastnameErr = "Please enter lastname";
    }
    else {
        $lastname = test_input($_POST["lastname"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
           $lastnameErr = "Only letters and white space  are allowed"; 
          }
    }


}

//Username validation

function Validate_username($username){


    if (empty($_POST["username"])) {                   
         $usernameErr = "Please enter username";
    }
    else {
        $lastname = test_input($_POST["lastname"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
           $usernameErr = "Only letters and white space  are allowed"; 
          }
    }


}
//address validate 


function Validate_address($address){

    if (empty($_POST["address"])) {
        $addressErr = "Please select an address";
    }
    else {
        $address = test_input($_POST["address"]);

    }


}

//PhoneCode validation

function Validate_phonecode($phoneCode){




    if (empty($_POST["phoneCode"])) {                      
         $phonecodeErr   = "Please select phonecode";
    }
    else {
        $phonecode= test_input($_POST["phoneCode"]);
    }

}
//Phone Number validation

function Validate_phonenumber($phonenumber){
      if (empty($_POST["phonenumber"])) {                      
         $phoneErr   = "Please select Phonenumber";
    }
    else {
        $phonenumber= test_input($_POST["phonenumber"]);
    }
   
}

?>