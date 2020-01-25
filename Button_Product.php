<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
				    include('connect.php');
				    $q1="select * from tblproduct where id='".$row['id']."'";
					$del=mysqli_query($conn,$q1);
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Product Code: <strong><?php echo $drow['code']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deleteProduct.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">

				<?php
				include('connect.php');
				    $q1="select * from tblproduct where id='".$row['id']."'";
					$edit=mysqli_query($conn,$q1);
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">


				<form method="POST" action="editproduct.php?id=<?php echo $erow['id']; ?>"enctype="multipart/form-data">

					
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Product Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="name" class="form-control" value="<?php echo $erow['name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Product Code:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="code" class="form-control" value="<?php echo $erow['code']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Product Image:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" name="image" value="<?php echo $erow['image']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Product Price:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="price" class="form-control" value="<?php echo $erow['price']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Short Description:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="shortdes" class="form-control" value="<?php echo $erow['ShortDes']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Full Description:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="fulldes" class="form-control" value="<?php echo $erow['Fulldes']; ?>">
						</div>
					</div>
					<div style="margin-left: 97px">
                          <select name="catagory" id="cat" value="<?php echo $erow['catagory']; ?> " >
                           <option selected hidden value="">Select catagory</option>
                           <option>pastry</option>
                            <option>sweet</option>
                             <option>dry</option>
                     
                         </select>
                       </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="submit"class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
  </div>
 </div>  
<!-- /.modal -->