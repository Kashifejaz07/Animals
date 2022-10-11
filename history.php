<?php 
include ("nav.html");
include ("connection.php");
$gid=$_GET['pid'];

$con = mysqli_connect("localhost","root","","Live_stock");



$sel2=mysqli_query($con,"SELECT * FROM `soft` WHERE `id`='$gid'");
while($roww=mysqli_fetch_array($sel2))
{
  $id = $roww['id'];
  $Tag = $_POST['Tag'];
$Animal1 =$roww['Animal'];
$dob = $roww['dob'];
$Breed = $roww['Breed'];
$Weight = $roww['Weight'];
$Height = $roww['Height'];
$Age = $roww['Age'];
$HealthStatus = $roww['HealthStatus'];
$Purpose = $roww['Purpose'];
$Category= $roww['Category'];
$PurchaseP = $roww['PurchaseP'];
$InwardFare = $roww['inwardfare'];
$Pdate=$roww['purchasedate'];
$Purchaseagent = $roww['purchaseagent'];
$PurchaseL = $roww['purchaselocation'];
$cagent=$roww['agentcommission'];
$IsolationP=$roww['issolationperiod'];
$other=$roww['other'];
$upload=$roww['Image'];;  
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
<style>
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
</style>
<body >

	<!--background-->
	<h3 class="sub-heading-agileits" >HISTORY</h3>
	
	<div id="content" >
			 <div class="content-1" >
	<div class="register-form-w3layouts">
	
		<!-- Form starts here -->
		<?php echo "<h3 class='sub-heading-agileits' >$gid</h3>" ?>
		<form action="#" method="post"  enctype="multipart/form-data" >
			<h3 class="sub-heading-agileits">History Form</h3>
			<div class="main-flex-w3ls-sectns">
				
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label> Animal</label>
					 <input type="text" name="image" id="image" class="form-control" value='<?php if(!empty($Animal1)){ echo "$Animal1";}  ?>'/> 
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label> Date of Birth</label>
					<input type="date" name="dob" value='<?php if(!empty($dob)){ echo "$dob";}  ?>'>
 				</div>
					<div class="field-agileinfo-spc form-w3-agile-text1">
					  <img src='upload/<?php if(!empty($upload)){ echo "$upload";}  ?>' style="width:100px;height:100px"> 
					  
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					    <label> Breed </label>
					<input type="text" name="image" id="image" class="form-control" value='<?php if(!empty($Breed)){ echo "$Breed";}  ?>'/> 
				</div>
				
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label>Gender</label>
					<input type="text" name="image" id="image" class="form-control" value='<?php if(!empty($other)){ echo "$other";}  ?>'/> 
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label> Health status </label>
					<input type="text" name="image" id="image" class="form-control" value='<?php if(!empty($HealthStatus)){ echo "$HealthStatus";}  ?>'/> 
					
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
			
				<div class="field-agileinfo-spc form-w3-agile-text2">
				        <label> Age (Months) </label><br>
					<input class="field" name="Age" required="required" type="text" value='<?php if(!empty($Age)){ echo "$Age";}  ?>' />
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				        <label> Weight (kg) </label>
					<input class="field" name="Weight" required="required" type="text"  value='<?php if(!empty($Weight)){ echo "$Weight";}  ?>'/>
				</div>
					<div class="field-agileinfo-spc form-w3-agile-text1">
					<label> Height (Inch) </label>
					<input class="field" name="Height" required="required" type="text"  value='<?php if(!empty($Height)){ echo "$Height";}  ?>'/>
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
		            		<label> Grade </label>
					<input type="text" name="image" id="image" class="form-control" value='<?php if(!empty($Category)){ echo "$Category";}  ?>'/> 
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				        	<label> Purpose </label>
					<input type="text" name="image" id="image" class="form-control" value='<?php if(!empty($Purpose)){ echo "$Purpose";}  ?>'/> 
				</div>
			</div>
		
			
			
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
				<label> Inward Fare (PKR) </label>
					<input class="field" name="InwardFare" required="required" type="text" value='<?php if(!empty($InwardFare)){ echo "$InwardFare";}  ?>' />
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label> Purchase Price (PKR) </label>
					 <input class="field" name="PurchaseP" required="required" type="text" value='<?php if(!empty($PurchaseP)){ echo "$PurchaseP";}  ?>' />
				   
				</div>
					<div class="field-agileinfo-spc form-w3-agile-text2">
						<label> Purchase Location</label>
					<input type="text" name="image" id="image" class="form-control" value='<?php if(!empty($PurchaseL)){ echo "$PurchaseL";}  ?>'/> 
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
				<label>Purchase Date</label>
					<input type="date" name= "Pdate" class="form-control" value='<?php if(!empty($Pdate)){ echo "$Pdate";}  ?>'>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label>Isolation Date</label>
					<input type="date" name= "P1date" value='<?php if(!empty($IsolationP)){ echo "$IsolationP";}  ?>'>
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<label>Agent Name</label>
				<input type="text" name="image" id="image" class="form-control" value='<?php if(!empty($Purchaseagent)){ echo "$Purchaseagent";}  ?>'/> 
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label>AgentCommission (%)</label>
					<input class="field" name="AgentCommission" required="required" type="text"  value='<?php if(!empty($cagent)){ echo "$cagent";}  ?>'/>
				
				</div>
			</div>
		<br>
			<h3 class="sub-heading-agileits">VACINATION</h3>
			
			<table>




<tr>

<th>Month</th>
<th>Disease</th>
<th>Date</th>



</tr>

<?php

		    
		    $sel=mysqli_query($con,"SELECT * FROM `goat_vacination` WHERE `goat_id`='$gid'");

while($row=mysqli_fetch_array($sel))
{
    	$m=$row[2];
	$d=$row[3];
	$dd=$row[4];

		    
		
		

	
	echo "<tr>
<td>$m</td>
<td>$d</td>
<td>$dd</td>


</tr>";




};

	

?>


</table>
<h3 class="sub-heading-agileits">WEIGHT</h3>
		<table>






<tr>

<th>Weight</th>
<th>Date</th>




</tr>
<?php

		    
		    $selE1=mysqli_query($con,"SELECT * FROM `soft` WHERE `id`='$gid'");

while($row11=mysqli_fetch_array($selE1))
{
	

	$w=$row11[5];
	$d=$row11[15];
	
		echo "<tr>
<td>$w</td>
<td>$d</td>


</tr>";
};

?>

<?php

		    
		    $selE=mysqli_query($con,"SELECT * FROM `weight` WHERE `S:NO`='$gid'");

while($row0=mysqli_fetch_array($selE))
{
	

	$w=$row0[2];
	$d=$row0[3];
	
		echo "<tr>
<td>$w</td>
<td>$d</td>


</tr>";
};

?>

</table>	


<h3 class="sub-heading-agileits">HEIGHT</h3>
		<table>






<tr>

<th>Height</th>
<th>Date</th>





</tr>
<?php

		    
		    $selE2=mysqli_query($con,"SELECT * FROM `soft` WHERE `id`='$gid'");

while($row12=mysqli_fetch_array($selE2))
{
	

	$w=$row12[6];
	$d=$row12[15];
	
		echo "<tr>
<td>$w</td>
<td>$d</td>


</tr>";
};

?>

<?php

		    
		    $selE3=mysqli_query($con,"SELECT * FROM `weight` WHERE `S:NO`='$gid'");

while($row3=mysqli_fetch_array($selE3))
{
	

	$w=$row3[5];
	$d=$row3[6];
	
		echo "<tr>
<td>$w</td>
<td>$d</td>


</tr>";
};

?>

</table>	
		
			
			
			<div class="clear"></div>
		
<input type="button" value="Print" onClick="window.print()">
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
