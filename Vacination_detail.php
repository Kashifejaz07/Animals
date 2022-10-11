<?php
include ("nav.html");
include ("connection.php"); 
$goat_id = $_GET['pid'];




    
    
    if(!isset($_GET['pid'])){
     die("please select Goat first");
    }
    
    else{

// if(isset($_POST['filter'])){
// $to=$_POST['To'];   
// $from=$_POST['From']; 

// $select=mysqli_query($con,"SELECT * FROM `soft` WHERE purchasedate BETWEEN '$to' AND '$from'");
// }







// $checkBox = implode(',', $_POST['Disease']);

 if(isset($_POST['submit']))
 {       
$month = $_POST['month'];
$vdate = $_POST['vdate'];
$v_date = $_POST['v_date'];

$disease = $_POST['dis'];
$disease1 = $_POST['dis1'];

$dis=$disease.",".$disease1;
      $query="INSERT INTO `goat_vacination`(`goat_id`, `month`, `disease`, `v_date`, `date`) VALUES ('$goat_id','$month','$dis','$v_date','$vdate')";     

     mysqli_query($con,$query) or die (mysql_error() );
  // 

 }





}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
</head>

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
   width: 41%;
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

<script>
function admin() {
    var x = document.getElementById("popup");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>
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
<body>
    <center><h1 style="font-family:monotype corsiva ; color:#ffffff; font-size:55px ; font-weight:bolder">VACCINATION</h1></center>

<div class="m-3">
<h2 class='font-weight-bold text-white'><?php echo $_GET['pid'];?></h2>
</div>


<form action="" method="post">
<table id="myTable">




</tr>
<tr>
    
<th>Month</th>
<th>Disease</th>
<th>Vacination Date</th>
<th>Due</th>
<th>Action</th>

</tr>

<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="January">January</th></td>
<td><input type="checkbox" name="dis" value="Entrerotoxemia">Entrerotoxemia
</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>


<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="February">February</th></td>
<td><input type="checkbox" name="dis" value="Anthrax">Anthrax

</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>


<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="March">March</th></td>
<td><input type="checkbox" name="dis" value="Sheep Pox">Sheep Pox

</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>



<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="June">June</th></td>
<td><input type="checkbox" name="dis" value="Pleuropneumonia">Pleuropneumonia

</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>


<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="July">July</th></td>
<td><input type="checkbox" name="dis" value="Entrerotoxemia">Entrerotoxemia

</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>


<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="August">August</th></td>
<td><input type="checkbox" name="dis" value="Haemorhagic Septicemia">Haemorhagic Septicemia

</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>


<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="September">September</th></td>
<td><input type="checkbox" name="dis" value="Turles">Turles <br/>
<input type="checkbox" name="dis1" value="Anthrax">Anthrax

</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>


<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="October">October</th></td>
<td><input type="checkbox" name="dis" value="R.P, Turles">R.P <br/> 
<input type="checkbox" name="dis1" value="Turles">Turles

</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>


<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="November">November</th></td>
<td><input type="checkbox" name="dis" value="Pleuropneumonia, Haemorhagic Septicemia">Pleuropneumonia <br/> 
<input type="checkbox" name="dis1" value="Haemorhagic Septicemia">Haemorhagic Septicemia

</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>


<form method="POST" action="">
<tr>
<th><input type="hidden" name="month" value="December">December</th></td>
<td><input type="checkbox" name="dis" value="Haemorhagic Septicemia">Haemorhagic Septicemia

</td>
<td><input type='date' name="v_date"></td>
<td><input type='date' name="vdate"></td>
<td><input type='submit' name="submit"></td>
</tr>
</form>

</table>
</form>




<table>


<tbody><tr>
<th>Tag#</th>
<th>Month</th>
<th>Disease</th>
<th>Vacination Date</th>
<th>Due</th>

</tr>
<?php

		    
		    $sel=mysqli_query($con,"SELECT * FROM `goat_vacination` WHERE goat_id='$goat_id'");

while($row=mysqli_fetch_array($sel))
{
	$i1=$row[1];
	$m=$row[2];
	$w=$row[3];
	$d=$row[4];
	$due=$row[5];


		   
	
	echo "<tr>
<td>$i1</td>
<td>$m</td>
<td>$w</td>
<td>$d</td>
<td>$due</td>
</tr>";


};

	

?>

</tbody></table>

           
            


</body>
</html>