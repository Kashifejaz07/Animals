<?php 
include ("nav.html");
include ("connection.php");

if(isset($_POST['submit'])){

$create_date = $_POST['create_date'];
$Purpose = $_POST['Purpose'];
$Animal = $_POST['Animal'];
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "./upload/" . $filename;

if(isset($_POST['submit']) )

    
    
    $sql="insert into add_animals(create_date,Purpose,Animal,image) Values('$create_date','$Purpose','$Animal','$filename')"; 
    // 	$con->query($sql);
    	
    $result=mysqli_query($con,$sql);
    if(move_upload_file($tempname, $folder))
    {
        echo '<script>alert("Upload Successfully")</script>';
    }
    else
    {
        echo '<script>alert("Error")</script>';
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
	<h3 class="sub-heading-agileits ">LIVE STOCK</h3>
	<div id="content">
			 <div class="content-1">
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		
		
		<form action="#" method="post"  enctype="multipart/form-data">
			<h3 class="sub-heading-agileits">Add Animal</h3>
			<br>
			
			<div class="main-flex-w3ls-sectns">
			<div style="text-align:center;">		
			    <div class="main-flex-w3ls-sectns">
                     <input type="date" name="create_date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" class="form-control">
                </div>
                
                <div class="field-agileinfo-spc form-w3-agile-text2">
				        	<label> Purpose </label>
					<select class="form-control" name="Purpose" value="<?php echo $rate ?>" style="width: 92% !important;">
					 	<option>Select Your Purpose</option>
					 	<?php
					        $sel2=mysqli_query($con,"SELECT * FROM `purpose`");
                            while ($row2 = mysqli_fetch_array($sel2))
                            {
    	                        echo "<option value='$row2[1]'>  $row2[1]    </option> "; 
                            }

                        ?>
					 </select>
				</div>
				
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label> Animal</label>
					<select class="form-control" name="Animal" required="required" value="<?php echo $rate ?>" type="text">
						<option>Select Animal</option>
					<?php
					
					$sel=mysqli_query($con,"SELECT * FROM animal");
while ($row = mysqli_fetch_array($sel))
{
    	echo "<option value='$row[1]'>  $row[1]    </option> "; 
}

?>
		
					 </select>
				</div>
						<div class="field-agileinfo-spc form-w3-agile-text1">
					<label>Select Photo</label>
					  <input type="file" name="image" id="image" class="form-control" style="color: white; "/>  
					  
				</div> 
				</div>
			</div>
	
		
			<input type="submit" value="Save" name="submit" />
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