<?php 
include ("nav.html");
include ("connection.php");

if(isset($_POST['submit'])){
    
$breed = $_POST['breed'];
$gender = $_POST['gender'];
$health_status = $_POST['health_status'];
$age_months = $_POST['age_months'];
$weight_kg = $_POST['weight_kg'];
$height_inch = $_POST['height_inch'];
$grade = $_POST['grade'];
$broker_commission = $_POST['broker_commission'];
$purchase_price = $_POST['purchase_price'];
$inward_fare = $_POST['inward_fare'];
$purchase_location = $_POST['purchase_location'];
$issolation_date = $_POST['issolation_date'];
$buying_broker_name = $_POST['buying_broker_name'];
$comments = $_POST['comments'];

if(isset($_POST['submit']) ) 

    $sql="insert into add_animals (breed,gender,health_status,age_months,weight_kg,height_inch,grade,broker_commission,purchase_price,inward_fare,purchase_location,issolation_date,buying_broker_name,comments)
	  Values('$breed','$gender','$health_status','$age_months','$weight_kg','$height_inch','$grade','$broker_commission','$purchase_price','$inward_fare','$purchase_location','$issolation_date','$buying_broker_name','$comments')"; 
	
	$con->query($sql);

if($sql){
?>
<script>
swal("Request for action", "Request operation is performed", "success", {
button: "OK",
});
</script>
<?php
}
else{

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
				
		$id=$_GET['id'];
		$sql="select * From add_animals where id='$id'";
		$results = $con->query($sql);	
		$rows=$results->fetch_assoc();	 
 		$create_date=$rows['create_date'];
		$Animal=$rows['Animal'];
		$Purpose=$rows['Purpose'];
		$image=$rows['image'];
		$breed=$rows['breed']; 
		$gender=$rows['gender'];
		$health_status=$rows['health_status'];
		$age_months=$rows['age_months'];
		$weight_kg=$rows['weight_kg'];
		$height_inch=$rows['height_inch'];
		$grade=$rows['grade'];
		$broker_commission=$rows['broker_commission'];
		$purchase_price=$rows['purchase_price'];
		$inward_fare=$rows['inward_fare'];
		$purchase_location=$rows['purchase_location'];
		$issolation_date=$rows['issolation_date'];
		$buying_broker_name=$rows['buying_broker_name'];
		$comments=$rows['comments'];	
	?>
<body>

	<!--background-->
	<h3 class="sub-heading-agileits">LIVE STOCK</h3>
	<div id="content">
			 <div class="content-1">
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="" method="post"  enctype="multipart/form-data" >
			<h3 class="sub-heading-agileits">PURCHASE</h3>
				<input class="field" name="['id']['Animal']" required="required" type="text"  value="<?php echo $id ;?><?php echo $Animal ;?>"readonly placeholder="Enter Tag" />
				
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label> Animal</label>
						<input class="field" name="Animal" type="text" placeholder="" value="<?php echo $Animal;?>"readonly/>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label> Purpose</label>
						<input class="field" name="Purpose" type="text" placeholder="" value="<?php echo $Purpose;?>"readonly/>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label> Date of Birth</label>
					<input type="date" name="create_date"  value="<?php echo $create_date;?>"readonly class="form-control">
 				</div>
					
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					    <label>Select Breed </label>
					<select class="form-control" name="breed">
						<option value="<?php echo $breed;?>"><?php echo $breed;?></option>
					<?php
					
					$sel=mysqli_query($con,"SELECT * FROM `breed`");
while ($row = mysqli_fetch_array($sel))
{
    	echo "<option value='$row[2]'>  $row[2]    </option> "; 
}

?>
		
					 </select>
					
				</div>
				
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label>Gender</label>
					<select class="form-control" name="gender" >
					 	<option value="<?php echo $gender;?>"><?php echo $gender;?></option>
					 	<option>Female</option>                                                          
					 </select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2" >
				<label> Health status </label>
					<select class="form-control" name="health_status" >
					 	<option value="<?php echo $health_status;?>"><?php echo $health_status;?></option>
					 	<?php
					
					$ssel=mysqli_query($con,"SELECT * FROM `status_dashbord`");
while ($rrow = mysqli_fetch_array($ssel))
{
    	echo "<option value='$rrow[1]'>  $rrow[1]    </option> "; 
}

?>
					 </select>
					
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
			
				<div class="field-agileinfo-spc form-w3-agile-text2">
				        <label> Age (Months) </label><br>
					<input class="field" name="age_months" required="required" type="number" placeholder="Age (Months)" value="<?php echo $age_months;?>"/>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				        <label> Weight (kg) </label>
					<input class="field" name="weight_kg" required="required" type="number" placeholder="Weight (Kg)" value="<?php echo $weight_kg;?>"/>
				</div>
					<div class="field-agileinfo-spc form-w3-agile-text1">
					<label> Height (Inch) </label>
					<input class="field" name="height_inch" required="required" type="number" placeholder="Height (Inch)" value="<?php echo $height_inch;?>"/>
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
		            		<label> Grade </label>
					<select class="form-control" name="grade" value="<?php echo $grade;?>">
					 	<option> Select Grade</option>
					 	<?php
					
					$sel1=mysqli_query($con,"SELECT * FROM `category`");
while ($row1 = mysqli_fetch_array($sel1))
{
    	echo "<option value='$row1[1]'>  $row1[1]    </option> "; 
}

?>
					 </select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				        	<label>Broker Commission (%)</label>
						<input class="field" name="broker_commission" type="text" placeholder="AgentCommission (%)" value="<?php echo $broker_commission;?>"/>
				</div>
			</div>
		
			
			
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label> Purchase Price (PKR) </label>
					 <input class="field" name="purchase_price" required="required" type="text" placeholder="Purchase Price (PKR)" value="<?php echo $purchase_price;?>"/>
				   
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text1">
				<label> Inward Fare (PKR) </label>
					<input class="field" name="inward_fare" required="required" type="text" placeholder="Inward Fare (PKR)" value="<?php echo $inward_fare;?>"/>
				</div>
			
					<div class="field-agileinfo-spc form-w3-agile-text2">
						<label> Purchase Location</label>
							<input class="field" name="purchase_location" required="required" type="text" placeholder="Purchase Location" value="<?php echo $purchase_location;?>"/>
			
					 	
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<!--<div class="field-agileinfo-spc form-w3-agile-text1">
				<label>Purchase Date</label>
					<input type="date" name= "Pdate" class="form-control">
				</div>-->
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label>Isolation Date (Till)</label>
					<input type="date" name="issolation_date" style="width: 92% !important;" value="<?php echo $issolation_date;?>">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<label>Buying Broker Name</label>
					
				
						<input class="field" name="buying_broker_name" type="text" placeholder="Broker Name" value="<?php echo $buying_broker_name;?>" />
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				
				<!--<div class="field-agileinfo-spc form-w3-agile-text2">
					<label>Broker Commission (%)</label>
					<input class="field" name="AgentCommission" type="text" placeholder="AgentCommission (%)" style="width: 92% !important;" />
				
				</div>-->
			</div>
		<div class="field-agileinfo-spc form-w3-agile-text1">
					<label> Photo <?php echo $image;?></label>
					  <input type="file" name="image" id="image" class="form-control"/>  
					  
				</div>
				<div class="main-flex-w3ls-sectns">
			
					<div class="field-agileinfo-spc form-w3-agile-text1">
					<label>Comment</label>
					
				
					<textarea  name='comments' id='comment' style='width: 199% !important;'><?php echo $comments;?></textarea>
				</div>
			</div>
			
		
			
			
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