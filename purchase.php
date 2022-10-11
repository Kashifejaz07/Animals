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
    margin-left: 1px;
}

body {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 100%;
    background: url(css/B1.jpg)no-repeat center;
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
element.style {
    color: #ffffff;
    font-size: 25px;
    float: right;
    margin-right: 131px;
}

</style>
<?php 

include ("connection.php");
include ("nav.html");



if(isset($_POST['submit'])){

$id= $_POST['id'];
$Tag= $_POST['Tag'];
$seller= $_POST['seller'];
$Pprice= $_POST['Pprice'];
$date= $_POST['date'];
$Weight= $_POST['Weight'];
$upload="";

if(isset($_FILES['image']) ) 
              {
                 $upload=$_FILES['image']['name'];
                 move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$upload); 
                  }

     $query=("INSERT INTO `purchase`(`id`, `tag`, `image`, `seller`, `p_price`, `c_date`, `p_weight`) VALUES('$id','$Tag','$upload','$seller','$Pprice','$date','$Weight')");

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
	
	<div id="content">
			 <div class="content-1">
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="#" method="post"  enctype="multipart/form-data">
			<h3 class="sub-heading-agileits">PURCHASE</h3>
			
		
			
						<div class="main-flex-w3ls-sectns">
							
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<label>Pic</label>
					<input type="file" name="image" id="image" class="form-control"/>	
			
				</div>
				
						<div class="field-agileinfo-spc form-w3-agile-text1">
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


		
			
			
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input class="field" name="Tag" required="required" type="text" placeholder="Enter Tag" />	
				   
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text1">
				<input class="field" name="Weight" required="required" type="number" placeholder="Weight (Kg)" />
				
				</div>
 
				</div>
	  	<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text2">
					
				<input class="field" name="Pprice" required="required" type="text" placeholder="Purchase Price (PKR)" />
				
				
				   </div>
				   
				   <div class="field-agileinfo-spc form-w3-agile-text1">
			<select class="form-control" name="seller">
					 	<option>Select seller</option>
					 		<?php
					
					$sel1=mysqli_query($con,"SELECT * FROM `seller`");
             while ($row1 = mysqli_fetch_array($sel1))
              {
    	echo "<option value='$row1[1]'>  $row1[1]    </option> "; 
              }

                 ?>
					 </select>
					 
					  <a href="http://khaitonline.com/v2/seller.php"/>
					  <img src="css/icons8-plus-30.png"/></a>
					   </div>
				</div>
			<input type="submit" value="Submit" name="submit" />
			
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->


	</div>
</div>
</div>

		
		


 <table class="table table-bordered">  
                     
                <?php  
                $query1 = "SELECT * FROM purchase";  
                $result1 = mysqli_query($connect, $query1);  
                while($row1 = mysqli_fetch_array($result1))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="upload/'.($row1['image'] ).'" height="200" width="200" class="img-thumnail" />  
                                    <embed src="upload/'.($row1['image'] ).'" height="200" width="200" class="img-thumnail" />
                                    
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
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
	
	<!-- //Calendar Js -->

 
 
 

</body>

</html>

