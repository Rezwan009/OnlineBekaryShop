<?php
	include('connect.php');
	
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
	$id=$_GET['id'];
	$name=$_POST['name'];
	$code=$_POST['code'];
	$image=$_FILES['image']['name'];
	$price=$_POST['price'];
	$shortdes=$_POST['shortdes'];
    $fulldes=$_POST['fulldes'];
    $catagory=$_POST['catagory'];
	

     $q="update tblproduct set name='$name', code='$code', image='$image',price='$price',ShortDes='$shortdes',Fulldes='$fulldes',catagory='$catagory' where id='$id'";
     mysqli_query($conn, $q);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
             
	         echo"Record updated";
    }else {
          echo "Sorry, there was an error uploading your file.";
      }header('location:ProductUpdateDelete.php');
	

?>