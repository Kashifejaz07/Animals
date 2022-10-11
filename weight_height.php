<style>
body {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 100%;
    background: url(css/bg.jpg)no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
     background-attachment: fixed; 
    background-position: center;
}

	table {
		background: rgba(0, 0, 0, 0.78);
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	font-family:garamond;
	color:#FFF;
	text-align:center;
	font-size:25px;
	margin:4% 0%;
	-webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);

}

table td, table th {
    color: #fff;
    font-size: 16px;
    letter-spacing: 1.2px;
    padding: 10px 10px;
    outline: none;
    background: rgba(255, 255, 255, 0);
    border: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.27);
	text-align:center;
}




table th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #000;
text-align:center;
    color: white;
}
	
	
input[type=text]{
	font-family:garamond;
    width: 40%;
    padding: 5px 20px;
	margin: 5px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-size:20px;
	z-index:100px;
	font-weight:bold;
}



input[type=submit] {
   width: 25%;
	background-color:#000;
	transition:0.5s;
	opacity:0.7;
	font-size:20px;
	font-weight:bolder;
	font-family:garamond;
    color: white;
    padding: 5px 20px;
    margin: 5px 10px;
    border:2px solid #FFF;
    border-radius: 4px;
    cursor: pointer;
	
	}
	
	input[type=button] {
   width: 23%;
	background-color:#000;
	transition:0.5s;
	opacity:0.7;
	font-size:20px;
	font-weight:bolder;
	font-family:garamond;
    color: white;
    padding: 5px 20px;
    margin: 5px 10px;
    border:2px solid #FFF;
    border-radius: 4px;
    cursor: pointer;
	
	}
input[type=submit]:hover {
    
    background:transparent;
	-webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
}

input[type=button]:hover {
    
    background:transparent;
	-webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
}

.t1{
	background:transparent;
	border:1px #FFFFFF;
	width:45%;
	height:45px;
	margin:-3% 1%;
	-webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
position:absolute;
	}


#popup
{
	width:27%;
	height:230px;
	background-color:#000;
	margin-left:25%;
	display:none;
	-webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
	}


</style>
<?php 
include ("nav.html");
include ("connection.php");

$idd=$_GET['pid'];

if(isset($_POST['submit'])){

$id= $_POST['id'];
$Tag= $_POST['Tag'];
$weight= $_POST['weight'];
$date= $_POST['date'];
$w_due= $_POST['w_due'];
$height= $_POST['height'];
$h_date= $_POST['h_date'];
$h_due= $_POST['h_due'];



if(isset($_POST['submit']) ) 

     $query=("INSERT INTO `weight`(`S:NO`, `Tag`, `weight`, `date`, `w_due`, `height`, `h_date`, `h_due`) VALUES ('$id','$Tag','$weight','$date','$w_due','$height','$h_date','$h_due')");

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
	<?php
		if(isset($_POST['search'])){
		    $Animal = $_POST['Animal'];
		    
		      $sel=mysqli_query($con,"SELECT * FROM `soft` WHERE `id`='$Animal'");

while($row=mysqli_fetch_array($sel))
{
	$i1=$row[0];
	$a=$row[1];
	$v=$row[18];
	$d=$row[19];

		    
		}}
		?>
<body>

	<!--background-->
	<h3 class="sub-heading-agileits" ">LIVE STORE</h3>
	
	<div id="content">
			 <div class="content-1">
	<div class="register-form-w3layouts">
	
		<!-- Form starts here -->
		<form action="#" method="post"  enctype="multipart/form-data">
			<h3 class="sub-heading-agileits">WEIGHT</h3>
			<div class="main-flex-w3ls-sectns">
				
<div class="field-agileinfo-spc form-w3-agile-text2">
		
				<select class="form-control" name="Tag">
					 	<option>Select Tag</option>
					 		<?php
					
					$sel1=mysqli_query($con,"SELECT * FROM `soft`");
while ($row1 = mysqli_fetch_array($sel1))
{
    	echo "<option value='$row1[1]'>  $row1[1]    </option> "; 
}

?>
					 </select>
					
	</div>

			</div>
					<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
				<label>Weight</label>
					<input class="field" name="weight" required="required" type="number" placeholder="Weight (Kg)" />
				</div>
		
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label>Date</label><br>
		
					<input class="field" name="date" type="" value="<?php $currentDate = date('Y-m-d ');echo $currentDate;?>" placeholder="Due" />
			<style>
			.register-form-w3layouts input[type=""], .register-form-w3layouts input[type="text"], .register-form-w3layouts input[type="email"], .register-form-w3layouts input[type="number"], .register-form-w3layouts textarea, select.form-control, input#datepicker {
    width: 88%;
    font-weight: 300;
    font-weight: 400 !important;
    color: #fffdfd !important;
    font-size: 16px;
    letter-spacing: 1.2px;
    padding: 10px 10px;
    outline: none;
    background: #ffffff2e;
    border: none;
    border-bottom: 2px solid rgb(255, 255, 255);
    border-left: 2px solid rgb(255, 255, 255);
    box-sizing: border-box;
    font-family: 'Source Sans Pro', sans-serif;
}
</style>
				</div>
				
				
			</div>
		
			<input type="submit" value="Submit" name="submit" />
			
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->


	</div>
</div>
</div>

		
		
<form action="" method="post" enctype="multipart/form-data">
<table id="myTable">

<center><h1 style="font-family:monotype corsiva ; color:#ffffff; font-size:55px ; font-weight:bolder">VIEW DETAIL's</h1></center>
<meta charset="utf-8">
<div class="container">

<tr>

<th>Tag</th>
<th>Weight</th>
<th>Weight Date</th>


</tr>

<?php

$sel=mysqli_query($con,"SELECT * from weight");

while($row=mysqli_fetch_array($sel))
{

	$t=$row[1];
	$w=$row[3];
	$wd=$row[4];
	
	echo "<tr>

<td>$t</td>
<td>$w</td>
<td>$wd</td>

</tr>";

};

?>
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="lisenme.js"></script>
<script>
jQuery('#myTable').ddTableFilter();
</script>
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
