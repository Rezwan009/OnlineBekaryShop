<?php
error_reporting(0);
include 'connect.php';
$output = "";
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM user 
  WHERE Uname LIKE '%".$search."%'
  OR UFname LIKE '%".$search."%' 
  OR Ulastname LIKE '%".$search."%' 
  OR Uaddress LIKE '%".$search."%' 
  OR Uemail LIKE '%".$search."%'
  OR Ugender LIKE '%".$search."%'
  OR PhoneCode LIKE '%".$search."%'
  OR PhoneNumber LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM user ORDER BY UserId
 ";
}
$result = mysqli_query($conn, $query);
if( mysqli_num_rows($result) > 0 )
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover">
    <tr>

        <th style="text-align:center">User ID</th>
        <th style="text-align:center">Username</th>
        <th style="text-align:center">Address</th>
        <th style="text-align:center">Email</th>
        <th style="text-align:center">Gender</th>
        <th style="text-align:center">Phone Code</th>
        <th style="text-align:center">Contact No</th>
        
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["UserId"].'</td>
    <td>'.$row["Uname"].'</td>
    <td>'.$row["Uaddress"].'</td>
    <td>'.$row["Uemail"].'</td>
    <td>'.$row["Ugender"].'</td>
    <td>'.$row["PhoneCode"].'</td>
    <td>'.$row["PhoneNumber"].'</td>
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