<?php 
include ("nav.html");
include ("connection.php");


if(isset($_POST['submit'])){


$Animal = $_POST['Animal'];
$Breed = $_POST['Breed'];

$HealthStatus = $_POST['Status'];
$Category= $_POST['Category'];
$Purpose = $_POST['Purpose'];
$cagent=$_POST['Comission'];
$other=$_POST['Other'];
$Vaccination = $_POST['Vaccination'];




if(isset($_FILES['image']) ) 
              {
                 $upload=$_FILES['image']['name'];
                 move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$upload); 
                  }
       $query=("INSERT INTO `Admin`(`Animal`, `Breed`, `Status`, `Category`, `Purpose`, `Comission`, `Other`, `Vaccination`) VALUES ('$Animal','$Breed','$HealthStatus','$Category','$Purpose','$cagent','$other','$Vaccination')");

$result=mysqli_query($con,$query);

if($result){
echo "<script>alert('done');</script>";
}
else{
echo "<script>alert('done not');</script>";
} 

    }




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

	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<!--//fonts-->
</head>

<body>

	<!--background-->
	<h3 class="sub-heading-agileits" ">LIVE STOCK</h3>
	<div id="content">
			 <div class="content-1">
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="#" method="post"  enctype="multipart/form-data">
			<h3 class="sub-heading-agileits">PURCHASE</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="Animal"  type="text" placeholder="Enter Animal" />
				</div>
					<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="Breed"  type="text" placeholder="Enter Breed" />
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="Status"  type="text" placeholder="Enter Health Status" />
				</div>
					<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="Category"  type="text" placeholder="Enter Category" />
				</div>
			</div>
			
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="Purpose"  type="text" placeholder="Enter Purpose" />
				</div>
					<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="Comission"  type="text" placeholder="Enter Agent Comission" />
				</div>
			</div>
			
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="Other"  type="text" placeholder="Enter Other" />
				</div>
					<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="Vaccination"  type="text" placeholder="Enter Vaccination" />
				</div>
			</div>
			
			
		
			<input type="submit" value="Submit" name="submit" />
			
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
                $query = "SELECT * FROM soft";  
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
                }  
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