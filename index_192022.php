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
.profile{
    background: brown;
    padding: ;
    padding-left: 1rem;
    padding-right: 1rem;
    padding-bottom: 1px;
    padding-top: 4px;
    color: white;
    border-radius: px;
    border: 3px solid white;
    
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
   width: %;
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

.box:hover{
    transform:scale(1.1);
    
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


<body>
    <!--<center><p><h1 style="font-family:playfair ; color:#ff0000; font-size:67px ; font-weight:bolder;"></h1><a href="add_animals.php" >-->
    <!--    <span style="position:relative;left:450px;">Add Animals</span></a></p>-->
    <!--</center>-->
<!---->


 <!--<form role="search" class="navbar-form navbar-right mt-1" method="post" >
                <div class="position-relative has-icon-right" style="background: rgba(0, 0, 0, 0.7);">
                 <input type="text" placeholder="Sort By Animal" name="Animal" class="form-control round"  autocomplete="off" id="myInput" onkeyup="myFunction()" style="    width: 12%"/>
                   <input type="text" placeholder="Sort By Breed" class="form-control round"  autocomplete="off" id="myInput1" onkeyup="myFunction1()" style="    width: 12%"/>
                   <input type="text" placeholder="Sort By Gender" class="form-control round"  autocomplete="off" id="myInput2" onkeyup="myFunction2()" style="    width: 12%"/>
                     <input type="text" placeholder="Sort By Weight" class="form-control round"  autocomplete="off" id="myInput3" onkeyup="myFunction3()" style="    width: 12%"/>
                     <input type="text" placeholder="Sort By Type" class="form-control round"  autocomplete="off" id="myInput4" onkeyup="myFunction4()" style="    width: 11%"/>
                         <input type="text" placeholder="Sort By Age" class="form-control round"  autocomplete="off" id="myInput5" onkeyup="myFunction5()" style="    width: 10%"/>
                        
                  <label style="color:white">To:</label>  <input type="date" name="To" class="form-control round" style="    width: 13%;    height: 32px;float:left;"/>
                 <label style="color:white">From:</label>  <input type="date" name="From" class="form-control round" style="    width: 13%;    height: 32px;float:left;"/>
                  <input type="submit" name="filter" value="filter" style="width:7%;float:left;">
				  </form>
                  	<div class="form-control-position">
                      <?php
                      /*while ($data=mysqli_fetch_assoc($query1))
{
    	echo "<h1 style='color:white;'>Total :$Animal $data[Animal] </h1>" ;
} */?><i class="ft-search"></i></div>
                </div>
              

<br style="clear:both;">
 -->

<div class="body" style="background: bisque;">
    
                  
                                <div class="row" style="margin-right: 0px; ">
      
      <div class="col" style="background-color:orange;padding: 6px;" ></div>
      
      </div>
                     <br>
							<?php															
								
								$sql="select * From add_animals order by id DESC";
								
								$result = $con->query($sql);
								
								if($result->num_rows>0)
								{
									$count=0;
									while($rows=$result->fetch_assoc())	
									{
																				
										?>
									<tr><form method="GET" action="edit_animals.php">	
										<div class=""  style="float:left;width:20%; background: bisque;">
                                         
                                                <div class="box" style="width:100%;">
                                                    <img src="upload/<?php echo $rows['image']; ?>" style="width:99%; height:250px; "/>
                                                    
                                                </div>
                                                <div class="">
                                                    
                                                    <center>
                                                    <?php echo $rows['id']; ?>
    									            <br>
    									            <?php echo $rows['Animal']; ?>
    									            <br>
    									            <?php echo $rows['Purpose']; ?>
    									            <br>  
                                                     <!--<a href="image.php">IMAGE</a>
                                                     <br>
                                                    <a href="weight.php">WEIGHT</a>
                                                    <br>-->
                                                    <!--<input type="submit" value="Profile" style="background: firebrick;">-->
                                                    <a href='image.php?id=<?php echo $rows['id'];?>'>Image</a>
                                                    <td><a href='edit_animals.php?id=<?php echo $rows['id'];?>' class="profile">Profile</a> 
                                                    <a href='weight.php?id=<?php echo $rows['id'];?>'>Weight</a>
                                                    <!--<a href='delete/delete_index.php?id=<?php echo $rows['id'];?>' onclick="return confirm('Are you sure you want to delete this item?');"><i class='fa fa-trash' style='font-size:30px;color:black;float:;'></i></a>-->
									                </td>
                                                    <!--<a href="feed_in.php">IMAGE</a>
                                                    <a href="feed_in.php">WEIGHT</a>-->
                                                    <!--<input type="submit" value="Image"  style="background: firebrick;">
                                                    <input type="submit" value="Weight"  style="background: firebrick;">-->
                                                    <input type="hidden" value="<?php echo $rows['id'];?>" name="id"/>
                                                    </center>
                                                </div>
                                        
                                        </div>
                                    </tr>
								
							
							
		
								<?php
								
		}
	}
	
		?>
                          


                    </div>
                  </div> 
                  
</body>

</html>
<script src="assets/bundles/datatablescripts.bundle.js"></script><!-- Jquery DataTable Plugin Js -->
<script src="assets/js/pages/tables/jquery-datatable.js"></script>