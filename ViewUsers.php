 <?php


  session_start();

  if(isset($_COOKIE['abc'])){

    
  }else{
    header("location: AdminLogin.php");
  }
  


 function fetch_data()  
 {  
      $output = '';  
     include 'connect.php'; 
      $sql = "SELECT * FROM user ORDER BY UserId ASC";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["UserId"].'</td>  
                          <td>'.$row["Uname"].'</td>  
                          <td>'.$row["Uaddress"].'</td>  
                          <td>'.$row["Uemail"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  

  if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Customer Details PDF Generator");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  

      $content = '';  
      $content .= '  
      <h4 align="center">Customer Details PDF Generator</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="5%">Id</th>  
                <th width="30%">Name</th>  
                <th width="15%">Address</th>  
                <th width="50%">Email</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      ob_clean();
      $obj_pdf->Output('file.pdf', 'I');  
 }  

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
   $(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"serchUsers.php",
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
 <div><span class="pull-left"><a href="AdminHome.php"  class="btn btn-primary"> Back</a></span></div>
	<div class="input-group" style="margin-left: 240px;max-width: 65%">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control"/>
    </div>
	



 <div id="result" style="max-width: 65%;position: relative;margin-left: 240px;text-align: center;margin-top: 20px"><b><u>Search result</u></b></div>



  <div class="container">  
                <h4 align="center"> Customer Details PDF Generator</h4><br />  
                <div class="table-responsive">  
                	<div class="col-md-12" align="right">
                     <form method="post">  
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                     </form>  
                     </div>
                     <br/>
                     <br/>
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Id</th>  
                               <th width="30%">Name</th>  
                               <th width="15%">Address</th>  
                               <th width="50%">Email</th>  
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                </div>  
           </div>  
</body>
</html>