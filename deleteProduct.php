<?php
	include('connect.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from tblproduct where id='$id'");
	header('location:ProductUpdateDelete.php');

?>