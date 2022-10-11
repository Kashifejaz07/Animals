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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<?php
include ("nav.html");
include ("connection.php");

if(isset($_POST['submit'])){

$id= $_POST['id'];
$weight= $_POST['weight'];
$date= $_POST['date'];


if(isset($_POST['submit']) ) 

    $sql="insert into weight(id,weight,date)
	  Values('$id','$weight','$date')"; 
	
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
		$sql="select * From  weight where id='$id'";
		$results = $con->query($sql);	
		$rows=$results->fetch_assoc();	 
 		$weight=$rows['weight'];
		$date=$rows['date'];
		
	?>

<body>

	<!--background-->
	<h3 class="sub-heading-agileits" ">LIVE STOCK</h3>
	
	<div id="content">
			 <div class="content-1">
	<div class="register-form-w3layouts">
	
		<!-- Form starts here -->
		<form action="" method="post">
			<h3 class="sub-heading-agileits" style="padding-right: 33rem;"><input class="field" name="id" required="required" type="text" placeholder="" value="<?php echo $_GET['id'];?>" readonly/></h3>
            
			<div class="main-flex-w3ls-sectns">
				
<div class="field-agileinfo-spc form-w3-agile-text2">
		<label>Date</label><br>
			<input type="date" name="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" class="form-control">	
				
					
	</div>
	
<div class="field-agileinfo-spc form-w3-agile-text1">
                            <label>Weight</label>
                            <input class="field" name="weight" required="required" value="<?php echo $weight;?>" type="number"
                                placeholder="Weight (Kg)" />
                        </div>
			</div>			
			
			
				<input type="submit" value="Submit" name="submit" />
			
			<div class="clear"></div>
				
		
				
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
		
		</form>
		<!--// Form starts here -->


	</div>
</div>
</div>
<br></br>
<div class="table-responsive-m">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="myTable">
                            <thead>
                                <tr>						
                                    <th>ID</th>
									<th>Date</th>
									<th>Weight</th>
									  <th>Action</th>                               
                                </tr>
                            </thead>
                            <tbody>
							
							<?php															
								
								$sql="select * From weight WHERE `id` = $id ";
								
								$result = $con->query($sql);
								
								if($result->num_rows>0)
								{
									$count=0;
									while($rows=$result->fetch_assoc())	
									{
																				
										?>														
							
                                <tr>
                                    
                                    <td><?php echo $rows['id']; ?></td>
                                    
									<td><?php echo $rows['date']; ?></td>
									
									<td><?php echo $rows['weight']; ?></td>
									
									<td> 
									    <a href='delete/delete_weight.php?id=<?php echo $rows['id'];?>' onclick="return confirm('Are you sure you want to delete this item?');"><i class='fa fa-trash' style='font-size:30px;color:white;float:;'></i></a>
									</td>
									
                                </tr>
								
								<?php
								
		}
	}
		
		?>
                          
                            </tbody>
                        </table>
                    </div>
		
		
<form action="" method="post" enctype="multipart/form-data">
<table id="myTable">

<!--<center><h1 style="font-family:monotype corsiva ; color:#ffffff; font-size:55px ; font-weight:bolder"><a href="view_detail.php">History</a></h1></center>-->

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

