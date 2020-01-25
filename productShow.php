
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
	<style>
		th{
			text-align: center;
			padding: auto;
		}
#f1{
  margin-left: 40px;
}
#Catagory{

  background-color: white;
  margin: auto;
  position: relative;
  max-width: 50%;
  max-height: 60%;
  float: left;

  display: block;
  border:2px solid SaddleBrown;
  /*border-radius: 2px solid SaddleBrown;*/
  margin-top: 80px;
  
}
#lab1
{
   margin-left: 40px;
   text-align: center;
   margin-top:5px;
}
#cat{
  margin-left: 60px;
}#btn{
   margin-left: 80px;
}
	</style>

<script>
   $(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"searchproduct.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
</head>
<body>
	<div><span class="pull-left"><a href="AdminHome.php"  class="btn btn-primary"> Back</a></span></div><br>
	<div class="input-group"style="max-width: 70%;margin-left: 200px;margin-top: 20px">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Product Details" class="form-control"/>
    </div>
	



 <div id="result"class ="" style="max-width: 70%;position: relative;margin-left: 200px;text-align: center;margin-top: 20px"><b><u>Search result</u></b></div>






</body>
</html>