<?php

  session_start();

  if(isset($_COOKIE['abc'])){

    
  }else{
    header("location: UserLogin.php");
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
  margin-left: 350px;
  max-width: 770px;
  margin: auto;

}

.topnav a {
  color: #f2f2f2;
  text-align: center;
  padding: 35px 55px;
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
<link href="style1.css" type="text/css" rel="stylesheet" />
</head>
<body>
  
<span style="font-size:45px; color:Black;"><center><strong style="text-align: center;"><u>Online Bakery Shop</u></strong></center></span>
<div class="topnav">
  <a class="active"href="#">Home</a>
  <a href="ViewProduct.php">View Product</a>
  <a href="ViewCart.php">View Cart</a>
  <a href="UserLogout.php">Logout</a>
</div><br>

<?php 
  include 'connect.php';
        $q1="select * from `tblproduct`";
        $query=mysqli_query($conn,$q1);
        $row=mysqli_fetch_array($query);

?>

<div id="product-grid"style= "margin-left:30px">

  <div class="txt-heading">Products Catalog</div>
  <?php
  require 'AddDeleteCart.php';
  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC ");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
    <div class="product-item">
      <form method="post" action="UserHome.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
      <div><a href="Productdetails.php?id=<?php echo  $product_array[$key]["id"];?>""><img src="upload/<?php echo $product_array[$key]["image"];?>" style="width:150px;height:100px;"></a></div>
      <div><strong> <?php echo $product_array[$key]["name"]; ?> </strong></div>
      <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
      <div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
      </form>
    </div>
  <?php
      }
  }
  ?>
</div>

</body>
</html>








