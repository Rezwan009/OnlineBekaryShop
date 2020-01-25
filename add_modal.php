

<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="add_new.php" enctype="multipart/form-data">
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Product Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="name">
						</div>
					</div>
				
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Product Code:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="code">
						</div>
					</div>
		
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Product Image:</label>
						</div>
						<div class="col-lg-10">
						    <input type="file" name="image" value="Choose File">
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Product Price:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="price">
						</div>
					</div>


					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Short Description:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="shortdes">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Full Description:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fulldes">
						</div>
					</div>
					<div  class="input-container">
                    <label style="font-family: Arial, Helvetica, sans-serif;font-style: bold;margin-left: 30px">Category:</label>
     
                    </div>
                       <div style="margin-left: 97px">
                          <select name="catagory" id="cat" value=" " >
                           <option selected hidden value="">Select catagory</option>
                           <option>pastry</option>
                            <option>Special Sweets</option>
                             <option>dry</option>
                     
                         </select>
                       </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit"  name ="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save
                    </button>
                </div>
				</form>
			</div>
                </div>
				
            </div>
        </div>
    </div>
