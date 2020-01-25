<?php

  session_start();

  if(isset($_COOKIE['abc'])){


    
  }else{
    header("location: AdminLogin.php");
  }
  
?>


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  margin-left: 70px;
  max-width: 80%;
  margin: auto;
  margin-top: 15px;

}

.topnav a {
  color: #f2f2f2;
  text-align: center;
  padding: 14px 85px;
  text-decoration: none;
  font-size: 18px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('bi.jpg')">
<span style="font-size:45px; color:saddleBrown"><center><strong><u>Online Bekary Shop</u></strong></center></span>
<div class="topnav">
  <a class="active" href="productShow.php">View Product</a>
  <a href="ProductUpdateDelete.php">Product Manager</a>
  <a href="ViewUsers.php">View Customer</a>
  <a href="AdminLogout.php">Logout</a>
</div>



    
</body>
</html>
