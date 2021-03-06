
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}
input[type=text], input[type=password] {
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
form{


    border: 3px solid #f1f1f1;

    clear:both;
    max-width:80%;
    margin:0 auto;
    display:block;
   
    text-align:left;

}
#ad{
  padding-top: 5px;
}
.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 30px;
    text-align: center;
}

.input-field {
    width: 70%;
    padding: 10px;
    outline: none;
}
h2{
  margin-left: 200px;
   color:saddleBrown;

}
.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color: dodgerblue;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
    width: 35%;
    opacity: 0.9;
   margin-left: 110px;
}

.btn:hover {
    opacity: 1;
}
.input-field-radio{

  
  margin-left: 1px;
 
}
.error {
    color: #FF0000;
    width: 100%;
}

</style>
<title>Admin Registration Page</title>
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
  
</head>

<body>
 <h2>Admin Register Form</h2>
  <?php 
  include 'Admin_regCheck.php';
  ?>
<div style="margin-top: 0px"id="div1">
 
<form  name="myForm"  onsubmit="return validateForm()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="max-width:600px;margin:auto;display:block;border: 1px solid #f1f1f1;position: relative;">
 
   <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Firstname" name="firstname" id="fname" value="<?php echo htmlspecialchars($firstname);?>"required  pattern="^[A-Za-z0-9_]{1,15}$">
  </div>
  <!--<span class="error">*<?php echo $firstnameErr;?></span>-->
    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Lastname" name="lastname"id=" lname" value="<?php echo htmlspecialchars($lastname);?>"required  pattern="^[A-Za-z0-9_]{1,15}$">
  </div>
  <!--<span class="error">*<?php echo $lastnameErr;?></span>-->
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="username" id="uname" value="<?php echo htmlspecialchars($username);?>"required pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
  </div>
  <!--<span class="error">*<?php echo $usernameErr;?></span>-->

  <div class="input-container">
    <i class="fa fa-address-card-o icon"></i>
    <input class="input-field" type="text" placeholder="Address" name="address"size="50"value="<?php echo htmlspecialchars($address);?>"required pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,20}$">
  </div>
 <!-- <span class="error">*<?php echo $addressErr;?></span>-->
   

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" id="emails " value="<?php echo htmlspecialchars($email);?>"required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
  </div>
   <!--<span class="error">*<?php echo $emailErr;?></span>-->
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password"  id=" pass1" name="password_1"value="<?php echo htmlspecialchars($password_1);?>"required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
  </div>
   <!--<span class="error">*<?php echo $password_1Err;?></span>-->
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password"  id="pass2" name="password_2"value="<?php echo htmlspecialchars($password_2);?>"required>
  </div>
  <!-- <span class="error">*<?php echo $password_2Err;?></span>-->
     <div class="input-container">
      <label style="font-family: Arial, Helvetica, sans-serif;font-style: bold;">Gender:</label>
      <input class="input-field_radio"  type="radio" name="gender" id="male " value="M" <?php echo $Mchecked;?>required>Male &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
      <input class="input-field_radio"  type="radio"  name="gender" id=" female" value="F" <?php echo $Fchecked;?>required>Female &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="input-field-radio"  type="radio" required name="gender" id=" other" value="O" <?php echo $Ochecked;?>>Other
  </div>
   <!--<span class="error">*<?php echo $genderErr;?></span>-->
   <div  class="input-container">
     <label style="font-family: Arial, Helvetica, sans-serif;font-style: bold;">Phone No:</label>
     
   </div>
   <div class="input-container">
    <select name="phoneCode" id="phn" value=" "required >
      <option selected hidden value="">Select Code</option>
     <?php
          $options = array("018", "019", "016", "017", "015");
      foreach ($options as $option) {
             echo '<option value="' . $option . '"';
         if (in_array($option, $phoneArr)) {
          echo " selected";
         }
           echo ">" . ucfirst($option) . "</option>";
       }
   ?>
     </select><!--<span class="error">*<?php echo $phonecodeErr;?></span>-->
   </div>
   <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="Phone Number" name="phonenumber" value="<?php echo htmlspecialchars($phonenumber);?>"required>
  </div>
  <!--<span class="error">*<?php echo $phoneErr;?></span><br>-->

  <button type="submit" class="btn" name="submit">Register</button>
  <div id="ad">
    <label>Already a member?</label>
    <a href="AdminLogin.php">Sign-In</a>
  </div>
  </form>
  </div>


   <script type="text/javascript" src="AdminScript.js"></script>
</body>
</html>

