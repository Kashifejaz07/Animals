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
    font-family: garamond;
    color: #FFF;
    text-align: center;
    font-size: 25px;
    margin: 4% 0%;
    -webkit-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);

}

table td,
table th {
    color: #fff;
    font-size: 16px;
    letter-spacing: 1.2px;
    padding: 10px 10px;
    outline: none;
    background: rgba(255, 255, 255, 0);
    border: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.27);
    text-align: center;
}




table th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #000;
    text-align: center;
    color: white;
}


input[type=text] {
    font-family: garamond;
    width: 40%;
    padding: 5px 20px;
    margin: 5px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 20px;
    z-index: 100px;
    font-weight: bold;
}



input[type=submit] {
    width: 25%;
    background-color: #000;
    transition: 0.5s;
    opacity: 0.7;
    font-size: 20px;
    font-weight: bolder;
    font-family: garamond;
    color: white;
    padding: 5px 20px;
    margin: 5px 10px;
    border: 2px solid #FFF;
    border-radius: 4px;
    cursor: pointer;

}

input[type=button] {
    width: 23%;
    background-color: #000;
    transition: 0.5s;
    opacity: 0.7;
    font-size: 20px;
    font-weight: bolder;
    font-family: garamond;
    color: white;
    padding: 5px 20px;
    margin: 5px 10px;
    border: 2px solid #FFF;
    border-radius: 4px;
    cursor: pointer;

}

input[type=submit]:hover {

    background: transparent;
    -webkit-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
}

input[type=button]:hover {

    background: transparent;
    -webkit-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
}

.t1 {
    background: transparent;
    border: 1px #FFFFFF;
    width: 45%;
    height: 45px;
    margin: -3% 1%;
    -webkit-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    position: absolute;
}


#popup {
    width: 27%;
    height: 230px;
    background-color: #000;
    margin-left: 25%;
    display: none;
    -webkit-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<?php
include ("nav.html");
include ("connection.php");

if(isset($_POST['submit'])){

$create_date = $_POST['create_date'];
$feed_quantity = $_POST['feed_quantity'];

$feed_rate = $_POST['feed_rate'];

if(isset($_POST['submit']) ) 

    $sql="insert into feed_in(create_date,feed_quantity,feed_rate)
	  Values('$create_date','$feed_quantity','$feed_rate')"; 
	
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
    
<?php

include ("connection.php");

if(isset($_POST['send'])){

$create_date_out = $_POST['create_date_out'];
$feed_quantity_out = $_POST['feed_quantity_out'];

$total_feed_out = $_POST['total_feed_out'];

if(isset($_POST['send']) ) 

    $sql="insert into feeds_out(create_date_out,feed_quantity_out,total_feed_out)
	  Values('$create_date_out','$feed_quantity_out','$total_feed_out')"; 
	
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

<head>
    <title>Home</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords"
        content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
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
		$sql="select * From feed_in ORDER BY id DESC LIMIT 1";
		$results = $con->query($sql);	
		$rows=$results->fetch_assoc();	
		$rate=$rows['feed_rate'];

	?>
	<?php
// 			$sql="select * From feed_in";
//     	$sum = "select SUM(feed_rate) AS TotalItemsOrdered FROM feed_in";
//     	        // mysql> SELECT SUM(working_hours) AS "Total working hours" FROM employees;  

	?>
<body>
    <?php

    include ("connection.php");

    
// Create connection by passing these connection parameters
//echo "<h1>"; echo "sum() aggregate  Demo "; echo"</h1>";

echo "<h2>";echo " Find the total cost of food items ";echo "</h2>";
//sql query
$sql = "SELECT  SUM(feed_quantity) from feed_in";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total cost: ". $row['SUM(feed_quantity)'];
    echo "<br>";
}
 

 
//close the connection
 
?>

    <!--background-->
    <h3 class="sub-heading-agileits" "></h3>
	
	<div id=" content">
        <div class="content-1">
            <div class="register-form-w3layouts" style="display: -webkit-inline-box; background: none;">

                <!-- Form starts here -->
                <form action="" method="post">
                
                    <h3 class="sub-heading-agileits" >(FEED IN Qty)
                    <br></br>
                    <div class="main-flex-w3ls-sectns">

                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label>Date</label>
                            <input type="date" name="create_date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" class="form-control">
                        </div>

                        
                        <div class="field-agileinfo-spc form-w3-agile-text2">

                            <label>Feed Quantity</label><br>
                            <input class="field" name="feed_quantity" required="required" type="number"
                                placeholder="Feed Quantity" />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text2">

                            <label>Feed Rate</label>
                            <input class="field" name="feed_rate" required="required" value="" type="number" placeholder="Feed Rate" />
                        </div>

                    </div>
                    
                            
                    <input type="submit" value="Submit" name="submit" style="margin-left: 14rem; width: auto; border-radius: 50rem; padding-top: 2;
    padding-bottom: 2;" />
                    <div class="clear"></div>
                </form></h3>
                <!--// Form starts here -->
                
                
                <!-- Form starts here -->
                <form action="" method="post" enctype="multipart/form-data" >
                    <h3 class="sub-heading-agileits" >(FEED OUT Qty)
                    <br></br>
                    <div class="main-flex-w3ls-sectns">

                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label>Date</label>
                            <input type="date" name="create_date_out" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" class="form-control">
                        </div>

                        
                        <div class="field-agileinfo-spc form-w3-agile-text2">

                            <label>Feed Quantity</label><br>
                            <input class="field" name="feed_quantity_out" required="required" type="number"
                                placeholder="Feed Quantity" />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text2">

                            <label>Feed Rate</label>
                            <input class="field" name="total_feed_out" required="required" value="" type="number" placeholder="Feed rate" />
                        </div>

                    </div>

                    <input type="submit" value="submit" name="send" style="margin-left: 14rem; width: auto; border-radius: 50rem; padding-top: 2;
    padding-bottom: 2;"/>

                    <div class="clear"></div>
                </form>
                <!--// Form starts here -->


            </div>
        </div>
    </div>

            </div>
        </div>
        </div>

<div class="table-responsive-m">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="myTable">
                        
                            <tbody>
                                <tr>
                                    <th style="padding-right: 41rem;">
                                    <?php include ("connection.php");

    
// Create connection by passing these connection parameters
//echo "<h1>"; echo "sum() aggregate  Demo "; echo"</h1>";

echo "<h2>";echo "(TOTAL FEED IN) <br></br>";echo "</h2>";
//sql query

$sql = "SELECT  SUM(feed_quantity) from feed_in";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Quantity: ". $row['SUM(feed_quantity)'];
    echo "<br>";
}
 
 
 echo "<h2>";echo "";echo "</h2>";
//sql query
$sql = "SELECT  SUM(feed_rate) from feed_in";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Rate: ". $row['SUM(feed_rate)'];
    echo "<br>";
}




//close the connection
 
?>


                                    </th>
                                                                        <th style="padding-right: 41rem;">
                                    <?php include ("connection.php");

    
// Create connection by passing these connection parameters
//echo "<h1>"; echo "sum() aggregate  Demo "; echo"</h1>";

echo "<h2>";echo "(TOTAL FEED OUT) <br></br>";echo "</h2>";
//sql query

$sql = "SELECT  SUM(feed_quantity_out) from feeds_out";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Quantity: ". $row['SUM(feed_quantity_out)'];
    echo "<br>";
}
 
 
 echo "<h2>";echo "";echo "</h2>";
//sql query
$sql = "SELECT  SUM(total_feed_out) from feeds_out";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Rate: ". $row['SUM(total_feed_out)'];
    echo "<br>";
}




//close the connection
 
?>


                                    </th>
                                </tr>
                                
                            </tbody>
                            
                            
                        </table>
                        
                    </div>
                   
                    
                    
                    <h1>Feed In</h1>







 <div class="table-responsive-m">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="myTable">
                            <thead>
                                <tr>						
                                    <th>ID</th>
									<th>Date</th>
									<th>Feed Quantity</th>
									<th>Feed Rate</th>
									<!--<th>(TOTAL STOCK)</th>-->
									<th>Action</th>                                   
                                </tr>
                            </thead>
                            <tbody>
							
							<?php															
								
								$sql="select * From feed_in";
								
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
									
									<td><?php echo $rows['feed_quantity']; ?></td>
									
									
									
									<td><?php echo $rows['feed_rate']; ?></td>
									
									<!--<td><?php echo $rows['total_feed']; ?></td>-->
									
									<td><a href='edit_feed_in.php?id=<?php echo $rows['id'];?>'><i class='fa fa-edit' style='font-size:30px;color:white;float:;'></i></a> 
									    <a href='delete/delete_feed_in.php?id=<?php echo $rows['id'];?>' onclick="return confirm('Are you sure you want to delete this item?');"><i class='fa fa-trash' style='font-size:30px;color:white;float:;'></i></a>
									</td>                                   
                                </tr>
								
								<?php
								
		}
	}
		
		?>
                          
                            </tbody>
                            
                        </table>
                        
                    </div>
                   
<div class="table-responsive-m">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="myTable">
                            <thead>
                                <tr>						
                                    
									<th></th>
									
									<!--<th>(TOTAL STOCK)</th>-->
									                                 
                                </tr>
                            </thead>
                            <tbody>
							
							<?php															
								
								$sql="select * From feed_in";
								
								$result = $con->query($sql);
								
								if($result->num_rows>0)
								{
									$count=0;
									while($rows=$result->fetch_assoc())	
									{
																				
										?>														
							
                                <tr>
                                    
                                    
									
									<td><?php echo $rows['']; ?><?php

    include ("connection.php");

    
// Create connection by passing these connection parameters
//echo "<h1>"; echo "sum() aggregate  Demo "; echo"</h1>";

echo "<h2>";echo "";echo "</h2>";
//sql query
$sql = "SELECT  SUM(feed_quantity) from feed_in";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Quantity: ". $row['SUM(feed_quantity)'];
    echo "<br>";
}
 

 
//close the connection
 
?></td>
									
									<td style="padding-right: 7rem;"><?php echo $rows['']; ?><?php

    include ("connection.php");

    
// Create connection by passing these connection parameters
//echo "<h1>"; echo "sum() aggregate  Demo "; echo"</h1>";

echo "<h2>";echo "";echo "</h2>";
//sql query
$sql = "SELECT  SUM(feed_rate) from feed_in";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Rate: ". $row['SUM(feed_rate)'];
    echo "<br>";
}
 

 
//close the connection
 
?></td>
									
									                         
                                </tr>
								
								<?php
								
		}
	}
		
		?>
                          
                            </tbody>
                            
                        </table>
                        
                    </div>
                    <h1>Feed Out</h1>







 <div class="table-responsive-m">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="myTable">
                            <thead>
                                <tr>						
                                    <th>ID</th>
									<th>Date</th>
									<th>Feed Quantity</th>
									<th>Feed Rate</th>
									<!--<th>(TOTAL STOCK)</th>-->
									<th>Action</th>                                   
                                </tr>
                            </thead>
                            <tbody>
							
							<?php															
								
								$sql="select * From feeds_out";
								
								$result = $con->query($sql);
								
								if($result->num_rows>0)
								{
									$count=0;
									while($rows=$result->fetch_assoc())	
									{
																				
										?>														
							
                                <tr>
                                    
                                    <td><?php echo $rows['id']; ?></td>
                                    
									<td><?php echo $rows['create_date_out']; ?></td>
									
									<td><?php echo $rows['feed_quantity_out']; ?></td>
									<td><?php echo $rows['total_feed_out']; ?></td>
									
									<td><a href='edit_feed_in.php?id=<?php echo $rows['id'];?>'><i class='fa fa-edit' style='font-size:30px;color:white;float:;'></i></a> 
									    <a href='delete/delete_feed_in.php?id=<?php echo $rows['id'];?>' onclick="return confirm('Are you sure you want to delete this item?');"><i class='fa fa-trash' style='font-size:30px;color:white;float:;'></i></a>
									</td>                                   
                                </tr>
								
								<?php
								
		}
	}
		
		?>
                          
                            </tbody>
                            
                        </table>
                        
                    </div>
                    
                    <div class="table-responsive-m">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="myTable">
                            <thead>
                                <tr>						
                                    
									<th></th>
									
									<!--<th>(TOTAL STOCK)</th>-->
									                                 
                                </tr>
                            </thead>
                            <tbody>
							
							<?php															
								
								$sql="select * From feeds_out";
								
								$result = $con->query($sql);
								
								if($result->num_rows>0)
								{
									$count=0;
									while($rows=$result->fetch_assoc())	
									{
																				
										?>														
							
                                <tr>
                                    
                                    
									
									<td><?php echo $rows['']; ?><?php

    include ("connection.php");

    
// Create connection by passing these connection parameters
//echo "<h1>"; echo "sum() aggregate  Demo "; echo"</h1>";

echo "<h2>";echo "";echo "</h2>";
//sql query
$sql = "SELECT  SUM(feed_quantity_out) from feeds_out";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Quantity: ". $row['SUM(feed_quantity_out)'];
    echo "<br>";
}
 

 
//close the connection
 
?></td>
									
									<td style="padding-right: 7rem;"><?php echo $rows['']; ?><?php

    include ("connection.php");

    
// Create connection by passing these connection parameters
//echo "<h1>"; echo "sum() aggregate  Demo "; echo"</h1>";

echo "<h2>";echo "";echo "</h2>";
//sql query
$sql = "SELECT  SUM(total_feed_out) from feeds_out";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Rate: ". $row['SUM(total_feed_out)'];
    echo "<br>";
}
 

 
//close the connection
 
?></td>
									
									                         
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

                <!--<center><h1 style="font-family:monotype corsiva ; color:#ffffff; font-size:55px ; font-weight:bolder"><a href="edit_feed_in.php">History</a></h1></center>-->

                <!--copyright-->

                <!--//copyright-->
                <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
                <!-- Calendar Js -->
                <script src="js/jquery-ui.js"></script>
                <script>
                $(function() {
                    $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
                });
                </script>
                <!-- //Calendar Js -->


</body>

</html>