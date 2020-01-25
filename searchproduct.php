<?php
error_reporting(0);
include 'connect.php';
$output = "";
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM tblproduct 
  WHERE name LIKE '%".$search."%'
  OR code LIKE '%".$search."%' 
  OR image LIKE '%".$search."%' 
  OR price LIKE '%".$search."%' 
  OR ShortDes LIKE '%".$search."%'
  OR Fulldes LIKE '%".$search."%'
  OR catagory LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM tblproduct ORDER BY id
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover">
    <tr>
     <th>Product Name</th>
     <th>Product Code</th>
     <th>Product Image</th>
     <th>Product Price</th>
     <th>Short Description</th>
     <th>Full Description</th>
     <th>Catagory</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["code"].'</td>
    <td align="middle"> <img src="upload/'. $row['image'] .'" alt=" " height =100px width=100px class="img-responsive" ></td>
    <td>'.$row["price"].'</td>
    <td>'.$row["ShortDes"].'</td>
    <td>'.$row["Fulldes"].'</td>
    <td>'.$row["catagory"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>