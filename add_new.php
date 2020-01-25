<?php
	
//error_reporting(0);
include('connect.php');

if(isset($_POST['submit'])){

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $name=$_POST['name'];
    $code=$_POST['code'];
    $image=$_FILES['image']['name'];
    $price=$_POST['price'];
    $shortdes=$_POST['shortdes'];
    $fulldes=$_POST['fulldes'];
    $catagory=$_POST['catagory'];
    $query="INSERT INTO tblproduct(name,code,image,price,ShortDes,Fulldes,catagory) 
              VALUES('$name','$code','$image','$price','$shortdes','$fulldes','$catagory')";
               mysqli_query($conn,$query);

              
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


   // Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

       echo"Record has been inserted";
            
             
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}   header('location:ProductUpdateDelete.php');








}
?>