<?php
  error_reporting(0);

  session_start();
  
  require "connect.php";

  
  if(!$conn)
  {
    echo "DB Error: ".mysqli_connect_error();
  }
  else
  {
    echo "Success Connection <br/>";
  }
  
  
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="" || $password==""){
      header("location:AdminLogin.php?satus=nullvalue");
    }
    else{ 
    
    $sql="SELECT * FROM admin where Ausername='$username' and Apassword='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    
          
        if($row['Ausername']==$username && $row['Apassword']==$password)
        {
          setcookie('abc','valid',time()+3600,'/');
          if($_POST['rm']=='on'){
          setcookie('rm','123',time()+3600,'/');
          }
          $isvalid = "validuser";
        }
            
    if($isvalid == "validuser"){
      echo $_COOKIE['abc'];
      $_SESSION['abc']= "123";
      header("location:AdminHome.php");
    }
    else{
      header("location:AdminLogin.php?status=invaliduser");
    } 
  
  }
  }

?>