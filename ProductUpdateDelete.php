<?php

  session_start();

  if(isset($_COOKIE['abc'])){

    
  }else{
    header("location: AdminLogin.php");
  }
  
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div><span class="pull-left"><a href="AdminHome.php"  class="btn btn-primary"> Back</a></span></div>

<div class="container">

  <div style="height:50px;"> </div>

  <div style="margin:auto;padding:auto; width:100%;position: relative;">
  <span style="font-size:25px; color:blue"><center><strong><u>Product Details</u></strong></center></span> 
    <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Product</a></span>
    <div style="height:50px;"></div>
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Product Code</th>
        <th>Product Image</th>
        <th>Product Price</th>
        <th>Short Description</th>
        <th>Full Description</th>
        <th>Catagory</th>

        <th>Action</th>
      </thead>
      <tbody>
      <?php
        include 'connect.php';
        $q1="select * from `tblproduct`";
        $query=mysqli_query($conn,$q1);
        while($row=mysqli_fetch_array($query)){
          ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['code']; ?></td>
            <td><?php echo "<img src ='upload/".$row['image']."'hieght=100px width= 100px>";?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['ShortDes']; ?></td>
            <td><?php echo $row['Fulldes']; ?></td>
            <td><?php echo $row['catagory']; ?></td>
            <td>
              <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
              <a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
              <?php include('Button_Product.php'); ?>
            </td>
          </tr>
          <?php
        }
      
      ?>
      </tbody>
    </table>
  </div>
  <?php include('add_modal.php'); ?>
</div>

</body>
</html>



