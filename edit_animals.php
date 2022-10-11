<?php 
include ("nav.html");
include ("connection.php");
session_start();
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
		$id=$_GET['id'];
		$sql="select * From add_animals where id='$id'";
		$results = $con->query($sql);	
		$rows=$results->fetch_assoc();	 
 		$create_date=$rows['create_date'];
		$Animal=$rows['Animal'];
		$Purpose=$rows['Purpose'];
		$image=$rows['image'];
		
	?>
	
<body>
	<!--background-->
	<h3 class="sub-heading-agileits">LIVE STOCK</h3>
	<div id="content">
			 <div class="content-1">
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		
		
		
		<form action="update/update_animals.php?id=<?php echo $_GET['id'];?>" method="post"  enctype="multipart/form-data">
			<h3 class="sub-heading-agileits">Edit Animal</h3>
			
				<input class="field" name="id" type="text" placeholder="" value="<?php echo $_GET['id'];?>" readonly/>
				
			 <div class="main-flex-w3ls-sectns">
				<!--<div class="field-agileinfo-spc form-w3-agile-text2">
				<label>Animal</label>
					<select class="form-control" name="animal">
						<option value=""></option>
					
		
					 </select>
				</div>-->
				<!--<div class="field-agileinfo-spc form-w3-agile-text2">
				<label> Type</label>
					<input type="text" name="type" value="<?php echo $type;?>">
 				</div>-->
					<!--<div class="field-agileinfo-spc form-w3-agile-text1">
					<label> Photo <?php echo $image;?></label>
					  <input type="file" name="image" id="image" class="form-control"/>  
					  
				</div>-->
			</div>
			<div class="main-flex-w3ls-sectns">
				<!--<div class="field-agileinfo-spc form-w3-agile-text1">
					    <label>Select Breed </label>
					<select class="form-control" name="breed1">
						<option></option>
					
					 </select>
					 	<input class="field" name="breed2" type="text" placeholder="" value="<?php echo $breed;?>" />
				</div>-->
				
				<!--<div class="field-agileinfo-spc form-w3-agile-text2">
					<label>Gender</label>
					<select class="form-control" name="other">
						<option value="<?php echo $other;?>"><?php echo $other;?></option>
					 	<option value="Male">Male</option>
					 	<option value="Female">Female</option>
					 </select>
				</div>-->
				<!--<div class="field-agileinfo-spc form-w3-agile-text2">
				<label> Health status </label>
					<select class="form-control" name="healthstatus">
					 	<option value="<?php echo $healthstatus;?>"><?php echo $healthstatus;?></option>
					 	<?php
					
					/*$ssel=mysqli_query($con,"SELECT * FROM `Status`");
while ($rrow = mysqli_fetch_array($ssel))
{
    	echo "<option value='$rrow[1]'>  $rrow[1]    </option> "; 
}*/

?>
					 </select>
					
				</div>-->
			</div>
			
			<div class="main-flex-w3ls-sectns">			
				<div class="field-agileinfo-spc form-w3-agile-text2">
				        <label>Animal</label><br>
					<input class="field" name="Animal" type="text" placeholder="" value="<?php echo $Animal;?>"/>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				        <label>Purpose</label>
					<input class="field" name="Purpose" type="text" placeholder="" required="required" value="<?php echo $Purpose;?>"/>
				</div>					
			</div>
			<div class="main-flex-w3ls-sectns">				
				
			</div>		
			
			<div class="main-flex-w3ls-sectns">
				<!--<div class="field-agileinfo-spc form-w3-agile-text2">
					<label> Purchase Price (PKR) </label>
					 <input class="field" name="purchasep" type="text" placeholder="" value="<?php echo $purchasep;?>"/>				   
				</div>-->	
					
			</div>
			
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
				<label>Date</label>
					<input type="date" name="create_date"  value="<?php echo $create_date;?>" class="form-control">
				</div>				
			</div>	
			<div class="field-agileinfo-spc form-w3-agile-text1">
					<label> Photo <?php echo $image;?></label>
					  <input type="file" name="image" id="image" class="form-control"/>  
					  
				</div>
		<!--<div class="field-agileinfo-spc form-w3-agile-text1">
					<label> Photo <?php echo $image;?></label>
					  <input type="file" name="image" id="image" class="form-control" value="<?php echo $image;?>" />  
					  
				</div>-->
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

</body>
</html>