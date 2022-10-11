<?php 
include ("nav.html");
include ("connection.php");

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Home</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<!--//fonts-->
</head>
<?php
$_GET['message']=isset($_GET['message']) ? $_GET['message'] : '';
if($_GET['message']!=''){
//echo '<b><p style="text-align:center;" class="form-message success"></span></b>';?>
<script>
swal("Request for action", "Request operation is performed", "success", {
button: "OK",
});
</script>
<?php
}
?>
<body>

	<!--background-->
	<h3 class="sub-heading-agileits">LIVE STOCK</h3>
	<div id="content">
			 <div class="content-1">
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="insert/add_milk_sale.php" method="post"  enctype="multipart/form-data">
			<h3 class="sub-heading-agileits">MILK SALE</h3>
				<input type="date" name= "date" class="form-control">
			
			<br>
			
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
				<label>Animal Count</label>
					<input type="number" name= "animal_count" class="form-control">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label>Daily Milk Production</label>
					<input type="text" name= "milk_production" style="width: 92% !important;">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<label>Quantity Counter</label>
					
				
						<input class="field" name="quantity_counter" type="number" placeholder=""  />
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label>Rate Counter</label>
					<input class="field" name="rate_counter" type="number" placeholder="" style="width: 92% !important;" />
				
				</div>
			</div>
			
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<label>Milk sold per month</label>
					
				
						<input class="field" name="milk_sold" type="text" placeholder=""  />
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label>Animal sold per month</label>
					<input class="field" name="animal_sold" type="text" placeholder="" style="width: 92% !important;" />
				
				</div>
			</div>		
		
			
			<input type="submit" value="Save" name="submit" />
			</form>
			<form method="post" action="index.php">
			<input type="submit" value="Back" name="back" />
			<div class="clear"></div>
		</form>
					
		<!--// Form starts here -->


	</div>
</div>
</div>
	<!--copyright-->
	
	<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- Calendar Js -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->

 
  <table class="table table-bordered">  
                     
                <?php  
                /*$query = "SELECT * FROM soft";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="upload/'.($row['image'] ).'" height="200" width="200" class="img-thumnail" />  
                                    <embed src="upload/'.($row['image'] ).'" height="200" width="200" class="img-thumnail" />
                                    
                               </td>  
                          </tr>  
                     ';  
                }  */
                ?>  
                </table>  
 
 

</body>

</html>
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','wmv','mp4']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  