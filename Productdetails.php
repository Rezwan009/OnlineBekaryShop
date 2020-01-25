<?php
				include('connect.php');
				 $id=$_GET['id'];
				    $q1="select * from tblproduct where id='".$id."'";
					$edit=mysqli_query($conn,$q1);
					$erow=mysqli_fetch_array($edit);


                    echo "Product Details"."</br></br></br>";

				    echo"Product id=".$erow['id']."</br>";
					echo"Product Name=".$erow['name']."</br>";
					echo"Product Code=".$erow['code']."</br>";
					echo"Product Price=".$erow['price']."</br>";
					echo"Short Description=".$erow['ShortDes']."</br>";
					echo"Full Description=".$erow['Fulldes']."</br>";
					echo"Catagoryt=".$erow['catagory']."</br>";
				    echo "Product image=<img src ='upload/".$erow['image']."'hieght=100px width= 100px>";


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
     <div style="height:50px;"> </div>
	<table class="table table-striped table-bordered table-hover" style="max-width: 80%;margin-left: 120px">
		<caption style="text-align: center"><u>Product Details </u></caption>

		<thead>
	
				<th>Product Id</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Product Price</th>
                <th>Short Description</th>
                <th>Full Description</th>
                <th>Catagory</th>
                <th>Product Image</th>
		
		</thead>
		<tbody>
			<tr>
				<td><?php echo $erow['id'];?></td>
				<td><?php echo $erow['name'];?></td>
				<td><?php echo $erow['code'];?></td>
                <td><?php echo $erow['price']; ?></td>
                <td><?php echo $erow['ShortDes'];?></td>
                <td><?php echo $erow['Fulldes'];?></td>
                <td><?php echo $erow['catagory']; ?></td>
                <td><?php echo "<img src ='upload/".$erow['image']."'hieght=100px width= 100px>";?></td>




			</tr>
		</tbody>
	</table>

</body>
</html>