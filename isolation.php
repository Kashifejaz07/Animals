<?php
include ("nav.html");
include ("connection.php"); 
$Animal=$_POST['Animal'];
if(isset($_POST['filter'])){
   
$to=$_POST['To'];   
$from=$_POST['From']; 

$select=mysqli_query($con,"SELECT * FROM `soft` WHERE purchasedate BETWEEN '$to' AND '$from'");
$query1=mysqli_query($con,"SELECT COUNT(*) AS Animal FROM `soft` WHERE Animal='$Animal'");
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Detail</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<form action="" method="post" enctype="multipart/form-data">
<table id="myTable">

<center><h1 style="font-family:monotype corsiva ; color:#ffffff; font-size:55px ; font-weight:bolder">VIEW DETAIL's</h1></center>
<form role="search" class="navbar-form navbar-right mt-1" method="post" >
                <div class="position-relative has-icon-right" style="background: rgba(0, 0, 0, 0.7);">
                  <input type="text" placeholder="Sort By Animal" name="Animal" class="form-control round"  autocomplete="off" id="myInput" onkeyup="myFunction()" style="    width: 12%"/>
                  
                  <input type="submit" name="filter" value="filter" style="width:7%">
                  <div class="form-control-position">
                      <?php
                      while ($data=mysqli_fetch_assoc($query1))
{
    	echo "<h1 style='color:white;'>Total :$Animal $data[Animal] </h1>" ;
} ?><i class="ft-search"></i></div>
                </div>
              </form>


<form action="" method="post" enctype="multipart/form-data">
<table id="myTable">






<tr>
<th>Id</th>
<th>Animal</th>
<th>Breed</th>
<th>Health Status</th>
<th>purchasedate</th>
<th>issolationperiod</th>
<th>Purchase Agent</th>
<th>Purchase Location</th>
<th>Agent Comission</th>
<th>Image</th>
<th>Action</th>
</tr>

<?php

$sel=mysqli_query($con,"SELECT * from soft");

while($row=mysqli_fetch_array($sel))
{
	$i1=$row[0];
	$a=$row[2];
	$b=$row[5];
	$hs=$row[9];
	$pd=$row[16];
	$ip=$row[17];
	$pa=$row[14];
    $pl=$row[15];
    $ac=$row[18];
    $i=$row[4];

	
	echo "<tr>

	<td>$i1</td>
<td>$a</td>
<td>$b</td>
<td>$hs</td>
<td>$pd</td>
<td>$ip</td>
<td>$pa</td>
<td>$pl</td>
<td>$ac</td>

<td> <img src='upload/$i' height='100px' width='100px' class='img-thumnail' />  </td>
<td><a href=''><i class='fa fa-edit' style='font-size:30px;color:white;'></i></a>
<a href='animal_delete.php?pid=$row[0]'><i class='fa fa-trash' style='font-size:30px;color:white;'></i></a>
</td>

</tr>";


};



	

?>


</table>
</form>

</body>
</html>