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
<?php 
include ("nav.html");
include ("connection.php");


// $con = mysqli_connect("localhost","root","","Live_stock");
if(isset($_POST['submit'])){

    $tag = $_POST['tag'];
    $animal = $_POST['animal'];
    $animal_id = $_POST['animal_id'];
    $feed_quantity = $_POST['feed_quantity'];
    $feed_rate = $_POST['feed_rate'];
    $animal_counter = $_POST['animal_counter'];
    $feed_animal = $_POST['feed_animal'];
    $feed_cost = $_POST['feed_cost'];
    
    if(isset($_POST['submit']) ) 
    
        $sql="insert into feed_out(tag,animal,animal_id,feed_quantity,feed_rate,animal_counter,feed_animal,feed_cost)
          Values('$tag','$animal','$animal_id','$feed_quantity','$feed_rate','$animal_counter','$feed_animal','$feed_cost')"; 
        
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

<!--echo "$row1[0]";-->

<!DOCTYPE HTML>
<html>

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

<body>

    <!--background-->
    <h3 class="sub-heading-agileits">LIVE STOCK</h3>
    <div id="content">
        <div class="content-1">
            <div class="register-form-w3layouts">
                <!-- Form starts here -->
                <form action="#" method="post" enctype="multipart/form-data">
                    <h3 class="sub-heading-agileits">Feed Out
                    <input class="field" name="tag" required="required" type="text" placeholder="Enter Tag" />
                    <div class="main-flex-w3ls-sectns">
                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label> Animal</label>
                            <select class="form-control" name="animal">
                                <option>Select Animal</option>
                                <option>Cow</option>
                                <option>Goat</option>
                                <option>Camel</option>
                            </select>
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label> Animal ID</label>
                            <select class="form-control" name="animal_id">
                                

                            <option>Animal Id</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            
                                	
                            </select>
                        </div>
 
                    </div>

                    <div class="main-flex-w3ls-sectns">

                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <label>Feed Quantity</label>
                            <input class="field" name="feed_quantity" required="required" type="number"
                                placeholder="Feed Quantity" />
                        </div>

                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <label>Feed Rate</label>
                            <input class="field" name="feed_rate" required="required" type="number"
                                placeholder="Feed Rate" />
                        </div>


                    </div>

                    <div class="main-flex-w3ls-sectns">

                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <label> Animal Counter </label><br>
                            <input class="field" name="animal_counter" required="required" type="number" placeholder="Animal Counter" />
                        </div>

                        
                        <div class="field-agileinfo-spc form-w3-agile-text2">

                            <label> Feed Animal </label><br>
                            <input class="field" name="feed_animal" required="required" type="text" placeholder="Enter Tag" />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text2">

                            <label> Feed Cost </label><br>
                            <input class="field" name="feed_cost" required="required" type="text" placeholder="Enter Tag" />
                        </div>

                    </div>

                    <input type="submit" value="Submit" name="submit" />

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
    $(function() {
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
    <br> </br>

<div class="table-responsive-m">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="myTable">
                            <thead>
                                <tr>						
                                    <th>ID</th>
									<th>Tag</th>
									<th>Animal</th>
									<th>Animal id</th>
									<th>Feed Quantity</th>
									<th>Feed Rate</th> 
                                    <th>Animal Counter</th>
									<th>Feed Animal</th>
									<th>Feed Cost</th>
                                    <th>Action</th>
									                                   
                                </tr>
                            </thead>
                            <tbody>
							
							<?php															
								
								$sql="select * From feed_out";
								
								$result = $con->query($sql);
								
								if($result->num_rows>0)
								{
									$count=0;
									while($rows=$result->fetch_assoc())	
									{
																				
										?>														
							
                                <tr>
                                    
                                    <td><?php echo $rows['id']; ?></td>
                                    
									<td><?php echo $rows['tag']; ?></td>
									
									<td><?php echo $rows['animal']; ?></td>
									
									<td><?php echo $rows['animal_id']; ?></td>

                                    <td><?php echo $rows['feed_quantity']; ?></td>
									
									<td><?php echo $rows['feed_rate']; ?></td>
									
									<td><?php echo $rows['animal_counter']; ?></td>

                                    <td><?php echo $rows['feed_animal']; ?></td>

                                    <td><?php echo $rows['feed_cost']; ?></td>
									
									
									
									
									
									
									<td><a href='edit_feed_out.php?id=<?php echo $rows['id'];?>'><i class='fa fa-edit' style='font-size:30px;color:white;float:;'></i></a> 
									    <a href='delete/delete_feed_out.php?id=<?php echo $rows['id'];?>' onclick="return confirm('Are you sure you want to delete this item?');"><i class='fa fa-trash' style='font-size:30px;color:white;float:;'></i></a>
									</td>                                   
                                </tr>
								
								<?php
								
		}
	}
		
		?>
                          
                            </tbody>
                        </table>
                    </div>

</body>

</html>
<script>
$(document).ready(function() {
    $('#insert').click(function() {
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg', 'wmv', 'mp4']) == -1) {
                alert('Invalid Image File');
                $('#image').val('');
                return false;
            }
        }
    });
});
</script>