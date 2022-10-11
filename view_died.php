<?php
include ("nav.html");
include ("connection.php"); 

if(isset($_POST['filter'])){
   
$to=$_POST['To'];   
$from=$_POST['From']; 

}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
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
    padding-top: 8px;
    padding-bottom: 8px;
    background-color: #000;
    text-align:;
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

	<select class="form-control" name="Purpose" value="<?php echo $rate ?>" style="width: 92% !important;">
					 	<option>Select Your Purpose</option>
					 
					 </select>
</style>


<body>
    <center><h1 style="font-family:playfair ; color:#ff0000; font-size:20px ; padding-right: 73rem; font-weight:bolder">-Quick Search-</h1></center>

<?php
    require'connection.php';
    if(ISSET($_POST['filter'])){
        $animal=$_POST['Animal'];
 
        $query=mysqli_query($con, "SELECT * FROM `add_animals` WHERE `Animal`='$animal'") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo $fetch['cow'].$fetch['cow'];
        }
    }else if(ISSET($_POST['reset'])){
        $query=mysqli_query($con, "SELECT * FROM `add_animals`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo $fetch['goat'].$fetch['Animal'];
        }
    }else{
        $query=mysqli_query($con, "SELECT * FROM `add_animals`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo $fetch['camel'].$fetch['Animals'];
        }
    }
?>

<!--<form method="POST" action="">
                <div class="form-inline">
                    <label>Type:</label>
                    <select class="form-control" name="Animal">
                        <option value="cow">cow</option>
                        <option value="goat">goat</option>
                        <option value="camel">camel</option>
                    </select>
                    <button class="btn btn-primary" name="filter">Filter</button>
                    <button class="btn btn-success" name="reset">Reset</button>
                </div>
            </form>-->


 

<div class="dropdown" style="padding-left: 2rem;">
  <button class="dropbtn" style="border-radius: 2rem;">-- Type -- </button>
  <div class="dropdown-content">
    <a href="view_camel.php">Camel</a>
    <a href="view_goat.php">Goat</a>
    <a href="view_cow.php">Cow</a>
  </div>
</div>

<div class="dropdown" style="padding-left: 2rem;">
  <button class="dropbtn" style="border-radius: 2rem;">-- Purpose -- </button>
  <div class="dropdown-content">
    <a href="view_fattening.php">Fattening</a>
    <a href="view_milking.php">Milking</a>
    
  </div>
</div>

<div class="dropdown" style="padding-left: 2rem;">
  <button class="dropbtn" style="border-radius: 2rem;">-- Status -- </button>
  <div class="dropdown-content">
    <a href="view_sold.php">sold</a>
    <a href="view_available.php">Available</a>
    <a href="view_died.php">Died</a>
  </div>
</div>

<div class="dropdown" style="padding-left: 2rem;">
  <button class="dropbtn" style="border-radius: 2rem;"><a href="View_detail.php" style="color: white;">-- ALL --</a></button>
 <div class="dropdown-content">
  </div>
</div>


<div class="body">
                  <div class="table-responsive-m">
                  <table class="table table-bordered table-striped table-hover " id="myTable">
                            <thead>
                                <tr>		
                                    <th>ID</th>
                                    <th>Purchase On</th>
									<th>Tag</th>
									<th>Type</th>
									
									<th>Breed</th>
									<th>Weight-kg</th>
									<th>Purpose</th>
									
									<th>Image</th>
									<th>Status</th>
									
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							
							<?php															
								
								$sql="select * From add_animals WHERE health_status='Died'";
								
								$result = $con->query($sql);
								
								if($result->num_rows>0)
								{
									$count=0;
									while($rows=$result->fetch_assoc())	
									{
																				
										?>														
							
                                <tr>
                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['create_date']; ?></td>                                    
									<td><?php echo $rows['']; ?><?php echo $rows['']; ?><a href='animal_registration.php?id=<?php echo $rows['id'];?>'><?php echo $rows['id']; ?><?php echo $rows['Animal']; ?></a></td>
                                    <td><?php echo $rows['Animal']; ?></td>
                                   
                                    <td><?php echo $rows['breed']; ?></td>      
                                    <td><?php echo $rows['weight_kg']; ?></td>
                                     <td><?php echo $rows['Purpose']; ?></td>
                                     <td><img src="upload/<?php echo $rows['image']; ?>" style="width:50px; height:60px; "/></td>
                                     <td><?php echo $rows['health_status']; ?></td>
                                     
                                    <td><a href='edit_animal_registration.php?id=<?php echo $rows['id'];?>'><i class='fa fa-edit' style='font-size:30px;color:white;float:left;'></i></a> 
									    <a href='delete/delete_animal_registration.php?id=<?php echo $rows['id'];?>' onclick="return confirm('Are you sure you want to delete this item?');"><i class='fa fa-trash' style='font-size:30px;color:white;float:left;'></i></a>
									</td> 
                                                                     
                                </tr>
								
								<?php
								
		}
	}
		
		?>
                          
                            </tbody>
                        </table>
                    </div>
                  </div> 

</body>
</html>
<script src="assets/bundles/datatablescripts.bundle.js"></script><!-- Jquery DataTable Plugin Js -->
<script src="assets/js/pages/tables/jquery-datatable.js"></script>