<?php
  if(isset($_COOKIE['rm'])){
    header("location: UserHome.php");
  }else{

    if(isset($_GET['status'])){
      $status = $_GET['status'];

      if($status == "invaliduser"){
        echo "Invalid username/password";
      }else if($status == "nullvalue"){
        echo "username/password can't be empty";
      } 
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login Page</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;


}
form {
	  border: 3px solid #f1f1f1;

    width: 30%;
 
    clear:both;
    max-width:80%;
    margin:0 auto;
    display:block;
   
    text-align:left;


}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.label {
     width: 10%;
     padding: 0px 0px;
     background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 30%;
    border-radius: 30%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 0px;
}

/* Change styles for span and cancel button on extra small screens 
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}*/
h2{


	  margin-left: 300px;
}

</style>
</head>
<body>

<h2> UserLogin Form</h2>
<div style="margin-top: 45px;margin: auto;">
	
  <form method="post" action="UserlogCheck.php">
  <div class="imgcontainer">
    <img src="login-user.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="user"name="username" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="pass"name="password" >
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox"  name="rm"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <label class="label">Not yet a member?</label>&nbsp;&nbsp;
    <label class="label"><a href="User_Reg.php">Register Here</a></label>
    <span class="psw"><a href="forgotpassword.php">Forgot password?</a></span>
  </div>
</form>
</div>

 

</body>
</html>
  <?php
  }
  ?>