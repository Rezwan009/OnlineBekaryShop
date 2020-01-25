<?php
  error_reporting(0);

  session_start();
  
  require "connect.php";
  
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="" || $password==""){
      header("location:UserLogin.php?satus=nullvalue");
    }
    else{ 
    
    $sql="SELECT * FROM user where Uname='$username' and Upassword='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    
          
        if($row['Uname']==$username && $row['Upassword']==$password)
        {
          setcookie('abc','valid',time()+3600,'/');
          if($_POST['rm']=='on'){
          setcookie('rm','123',time()+3600,'/');
          }
          $isvalid = "validuser";
        }
            
    if($isvalid == "validuser"){
      echo $_COOKIE['abc'];
      $_SESSION['username']= $username;
      header("location:UserHome.php");
    }
    else{
      header("location:UserLogin.php?status=invaliduser");
    } 
  
  }
}

?>