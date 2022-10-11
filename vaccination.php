<?php

include ("connection.php"); 
$v_animal=$_POST['v_animal'];
if(isset($_POST['filter'])){
   
$to=$_POST['To'];   
$from=$_POST['From']; 

$select=mysqli_query($con,"SELECT * FROM `vacci` WHERE purchasedate BETWEEN '$to' AND '$from'");
$query1=mysqli_query($con,"SELECT COUNT(*) AS v_animal FROM `vacci` WHERE v_animal='$v_animal'");
}


?>
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


if(isset($_POST['submit'])){

$id = $_POST['id'];
$Animal = $_POST['Animal'];
$Vaccination = $_POST['Vaccination'];
$Due = $_POST['Due'];



if(isset($_POST['submit']) ) 

       $query=("INSERT INTO `vacci`(`v_sno`, `v_animal`, `v_vaccination`, `v_date`) VALUES ('$id','$Animal','$Vaccination','$Due')");

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
		   $id = $_POST['id'];
		    
		    $sel=mysqli_query($con,"SELECT * FROM `soft` WHERE `id`='$id'");

while($row=mysqli_fetch_array($sel))
{
	$i1=$row[0];
	$a=$row[1];
	$v=$row[19];
	$d=$row[20];

		    
		}}
		?>
		
		<script>
              function myFunction() {
                  var input, filter, table, tr, td, i;
                  input = document.getElementById("myInput");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("myTable");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                      td = tr[i].getElementsByTagName("td")[1];
                      if (td) {
                          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                              tr[i].style.display = "";
                          } else {
                              tr[i].style.display = "none";
                          }
                      }
                  }
              }
          </script>
          <script>
              function myFunction1() {
                  var input, filter, table, tr, td, i;
                  input = document.getElementById("myInput1");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("myTable");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                      td = tr[i].getElementsByTagName("td")[2];
                      if (td) {
                          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                              tr[i].style.display = "";
                          } else {
                              tr[i].style.display = "none";
                          }
                      }
                  }
              }
          </script>
                    <script>
              function myFunction2() {
                  var input, filter, table, tr, td, i;
                  input = document.getElementById("myInput2");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("myTable");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                      td = tr[i].getElementsByTagName("td")[6];
                      if (td) {
                          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                              tr[i].style.display = "";
                          } else {
                              tr[i].style.display = "none";
                          }
                      }
                  }
              }
          </script>
          
            <script>
              function myFunction3() {
                  var input, filter, table, tr, td, i;
                  input = document.getElementById("myInput3");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("myTable");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                      td = tr[i].getElementsByTagName("td")[3];
                      if (td) {
                          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                              tr[i].style.display = "";
                          } else {
                              tr[i].style.display = "none";
                          }
                      }
                  }
              }
          </script>
                 
            <script>
              function myFunction4() {
                  var input, filter, table, tr, td, i;
                  input = document.getElementById("myInput4");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("myTable");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                      td = tr[i].getElementsByTagName("td")[7];
                      if (td) {
                          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                              tr[i].style.display = "";
                          } else {
                              tr[i].style.display = "none";
                          }
                      }
                  }
              }
          </script>
             <script>
              function myFunction5() {
                  var input, filter, table, tr, td, i;
                  input = document.getElementById("myInput5");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("myTable");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                      td = tr[i].getElementsByTagName("td")[8];
                      if (td) {
                          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                              tr[i].style.display = "";
                          } else {
                              tr[i].style.display = "none";
                          }
                      }
                  }
              }
          </script>
<body>

	<!--background-->
	<h3 class="sub-heading-agileits" ">LIVE STORE</h3>
		<form action="#" method="post"  enctype="multipart/form-data">
			<h3 class="sub-heading-agileits">VACCINATION <a onclick="my()" style="text-decoration: none;float: right;padding-right: 52px;cursor: pointer;">Show Form</a></h3>
	
				    <div class="position-relative has-icon-right" style="background: rgba(0, 0, 0, 0.7);">
                  <input type="text" placeholder="Sort By Animal" name="v-animal" class="form-control round"  autocomplete="off" id="myInput" onkeyup="myFunction()" style="    width: 12%"/>
                  
                  <input type="submit" name="filter" value="filter" style="width:7%">
                  <div class="form-control-position">
                      <?php
                      while ($data=mysqli_fetch_assoc($query1))
{
    	echo "<h1 style='color:white;'>Total :$v_animal $data[v_animal] </h1>" ;
} ?><i class="ft-search"></i></div>
                </div>
			</div>
		
			
		
			
			<div class="clear"></div>
		</form>
	 <script>
function my() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
	<div id="content">
			 <div class="content-1">
			 	
			 	
			 
	<div class="register-form-w3layouts" id="myDIV" style="display:none;" >
	
		<!-- Form starts here -->
		<form action="#" method="post"  enctype="multipart/form-data">
			<h3 class="sub-heading-agileits">VACCINATION</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="id" required="required" value="<?php if(!empty($i1)){ echo "$i1";}  ?>" type="text" placeholder="S:NO"  />
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<input class="field" name="Animal" required="required" value="<?php if(!empty($a)){ echo "$a";}  ?>" type="text" placeholder="Animal"  />
					
	</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input class="field" name="Vaccination" required="required" type="text" placeholder="Vaccination" />
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
				<label>Due Date</label>
					<input class="field" name="Due" required="required" type="date" placeholder="Due" />
				</div>
			</div>
			
			
			
			<input type="submit" value="Submit" name="submit" />
			
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->


	</div>

</div>
</div>

		
		

<table>

<center><h1 style="font-family:monotype corsiva ; color:#ffffff; font-size:55px ; font-weight:bolder">VIEW DETAIL's</h1></center>




<tr>
<th>Id</th>
<th>Animal</th>
<th>Vaccination</th>
<th>Due</th>



</tr>

<?php

		    
		    $sel=mysqli_query($con,"SELECT * FROM `vacci`");

while($row=mysqli_fetch_array($sel))
{
	$i1=$row[1];
	$a=$row[2];
	$v=$row[3];
	$d=$row[4];

		    
		
		

	
	echo "<tr>
<td>$i1</td>
<td>$a</td>
<td>$v</td>
<td>$d</td>


</tr>";




};

	

?>


</table>
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
 
