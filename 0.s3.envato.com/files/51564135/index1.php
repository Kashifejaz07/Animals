<?php include ("connection.php");


if(isset($_POST['submit'])){

$id = $_POST['id'];
$Animal = $_POST['Animal'];
$Breed = $_POST['Breed'];
$Weight = $_POST['Weight'];
$Height = $_POST['Height'];
$Age = $_POST['Age'];
$HealthStatus = $_POST['HealthStatus'];
$Purpose = $_POST['Purpose'];
$Category= $_POST['Category'];
$PurchaseP = $_POST['PurchaseP'];
$InwardFare = $_POST['InwardFare'];
//$Pagent = $_POST['agent'];
//$Plocation = $_POST['Plocation'];
$Pdate=$_POST['Pdate'];
//$Pdate=$_POST['P1date'];
//$IsolationPeriod = ['Iperiod'];
//$AgentCommission = ['AgentCommission'];
//$other = ['other'];



//$Purpose = $_POST['Purpose'];

$query=("INSERT INTO `soft`(`id`, `Animal`,`Breed`,`HealthStatus`,`Age`,`Weight`,`Height`,`Purpose`,`Category`,`inwardfare`,`PurchaseP`,`purchasedate`) 
VALUES ('$id','$Animal','$Breed','$HealthStatus','$Age','$Weight','$Height','$Purpose','$Category','$InwardFare','$PurchaseP','$Pdate')");

$result=mysqli_query($con,$query);

if($result){
echo "<script>alert('done');</script>";
}
else{
echo "<script>alert('done not');</script>";
} 

}

?>

<style>
table{
	margin-top: -490px;
}
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<!-- Original URL: https://0.s3.envato.com/files/51564135/index.html
Date Downloaded: 2/16/2019 12:36:33 PM !-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
 <title>Tab Login & Sign __ Forms </title>

 <link rel="stylesheet" type="text/css" href="css/blue.css" />
 </head>
 <body><div style="z-index: 9999; position: fixed; width: 100%; border: 0px; padding: 5px; margin: 0px; background-color: transparent;  font-size: 12pt; font-family: sans-serif;" id="web2disk_nag" onclick="javascript: document.getElementById('web2disk_nag').style.display = 'none';">
		<div style="color: #000000; background-color:#F1F1F1; margin-left: auto; margin-right: auto; border-width: 2px; border-style: solid; width: 550px; ">
			
		</div>
	</div>
 <div id="wrapper">
   <!--h1>Tab Login & Sign __ Forms </h1-->
   <div id="container">
	 <section class="tabs">
		
		 <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		 <span for="tab-1" class="tab-label-1">Purchase </span>
		

		 <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		 <span for="tab-2" class="tab-label-2"> Animal </span>

		 <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		 <span for="tab-3" class="tab-label-3"> Isolation</span>

		 <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" checked="checked" />
		 <span for="tab-4" class="tab-label-4">Vaccination </span>

		 <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		 <span for="tab-3" class="tab-label-3">Weight </span>

		 <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		 <span for="tab-3" class="tab-label-3">Sale </span>

		  <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		 <span for="tab-3" class="tab-label-3">Reports</span>
	
		 <div class="clear-shadow"></div>
		
		 <div id="content">
			 <div class="content-1">
				 <!--p>
					 <a href="#" class="media tw">Twitter </a><a href="#" class="media fb">Facebook </a>
				 </p-->	
				 <form action= "" autocomplete="on" method="post">
				   <p>
					 <label for="S:NO" class="uname" >S:NO </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
					 <input class="field" name="id" required="required" type="text" placeholder="S:NO" />
				   </p>
				   <p>
					 <label for="Animal" class="youmail"> Animal </label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
					 <select name="Animal">
					 	<option>Select Your Animal</option>
					 	<option>Goat</option>
					 	<option>Cow</option>
					 	<option></option>
					 </select>
					
				   </p>
				   <p>
					 <label for="Breed" class="youpasswd">Breed </label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
					 <input class="field" name="Breed" required="required" type="text" placeholder="Breed" />
				   </p>

				   

				   <p>
					 <label for="passwordsignup_confirm" class="youpasswd">Age </label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
					 <input class="field" name="Age" required="required" type="text" placeholder="Age" />
				   </p>

				   <p>
					 <label for="emailsignup" class="youmail" > Health Status </label>&nbsp; &nbsp; &nbsp; 
					 <select name="HealthStatus">
					 	<option>Select Your Health Status</option>
					 	<option>Normal</option>
					 </select>
					
				   </p>

				   <p>
					 <label for="passwordsignup_confirm" class="youpasswd">Weight </label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <input class="field" name="Weight" required="required" type="text" placeholder="Weight" />
				   </p>

				   <p>
					 <label for="passwordsignup_confirm" class="youpasswd">Height </label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
					 <input class="field" name="Height" required="required" type="text" placeholder="Height" />
				   </p>

				    <p>
					 <label for="emailsignup" class="youmail" > Purpose</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
					 <select name="Purpose">
					 	<option>Select Your Purpose</option>
					 	<option>#</option>
					 	<option>#</option>
					 </select>
					
				   </p>
				   <p>
					 <label for="emailsignup" class="youmail" > Category</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
					 <select name="Category">
					 	<option> select category</option>
					 	<option>#</option>
					 	<option>#</option>
					 </select>
					
				   </p>

<p>
					 <label for="InwardFare" class="youpasswd">Inward Fare </label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
					 <input class="field" name="InwardFare" required="required" type="text" placeholder="Inward Fare" />
				   </p>

<p>
					 <label for="Pprice" class="youpasswd">Purchase Price </label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
					 <input class="field" name="PurchaseP" required="required" type="text" placeholder="Purchase Price" />
				   </p>

				     <p>
						<label for="Pdate" class="youpasswd">Purchase Date </label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
						<input type="date" name= "Pdate">
					  </p>
					
					  <p>
						<label for="Pdate" class="youpasswd">Purchase Date </label> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
						<input type="date" name= "P1date">
					  </p>

	 <p>
					 <label for="agent" class="youmail" > Purchase From Agent</label>&nbsp; &nbsp; &nbsp;
					 <select name="agent">
					 	<option>Select Agent</option>
					 	<option>Abdul Walid</option>
					 	<option>Kashif</option>
					 </select>
					
				   </p>


				   <input type="submit" value="Submit" name="submit" />
				   </form>


				 




  
				      <p>
					 <label for="Plocation" class="youmail" >Purchase Location</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
					 <select name="Plocation">
					 	<option>Purchase Location</option>
					 	<option>gulsan-e-iqbal</option>
					 	<option>Saddar</option>
					 </select>
					
				   </p>
				   
   
				      <p>
					 <label for="Isolation Period" class="youmail" >Isolation Period</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
					 <select name="Iperiod">
					 	<option>Select Date
					 	<option>#</option>
					 	<option>#</option>
					 </select>
					
				   </p>

				      <p>
					 <label for="AgentCommission" class="youmail" > Agent Commission</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
					 <select name="AgentCommission">
					 	<option>Agent Commission</option>
					 	<option>100</option>
					 	<option>200</option>
					 </select>
					
				   </p>
				   <p>
					 <label for="Other" class="youmail" >Other</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					 <select name="other">
					 	<option>Other</option>
					 	<option>#</option>
					 	<option>#</option>
					 </select>
					
				   </p>


				   







				   <br>
				   <p>
					 <!--label for="image" class="youpasswd" name = "image">Select image:&nbsp; &nbsp; &nbsp;&nbsp; 
  </label>	
			

				   <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form-->

				 </form>
				 <!--form action="" method="Post">
				 <input type="submit" value="Submidsdsdst" name="submit" />
				 </form-->
			 </div>
			 <div class="content-2">
				
				 <form action="" autocomplete="on">
							
	 <table  class="table  table-hover table-bordered">
    <tr>
<th>Id  </th>
<th> Animal </th>
<th> Breed</th>
<th>Height</th>
<th>Weight</th>
<th>HealthStatus</th>
<th>Purpose</th>
    </tr>
							 <?php
  $sql = "SELECT id, Animal, Breed, Age, Height, HealthStatus, Purpose from soft";
$result = $con->query($sql);
if($result -> num_rows >0){
  while ($row = $result-> fetch_assoc()) { ?>
            <tr>
            
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["Animal"];?></td>
                <td><?php echo $row["Breed"];?></td>
                <td><?php echo $row["Age"];?></td>
                <td><?php echo $row["Height"];?></td>
				<td><?php echo $row["HealthStatus"];?></td>
				<td><?php echo $row["Purpose"];?></td>
				
                <td>
                <a class="edit_btn" href="patients.php?edit=<?php echo $row['id']; ?>">Edit</a>
                </td>
                <td>
                <a class="del_btn" href="patients.php?del=<?php echo $row['id']; ?>">DELETE</a>
                </td>
        <br>
                
            </tr>
        <?php        
                }
                
            }           
        ?>
 </table>
 </form>
				
			 </div>
			 <div class="content-3">
				 <form action="" autocomplete="on">
				  
				 <table  class="table  table-hover table-bordered">
    <tr>
<th>Id  </th>
<th> Animal </th>
<th> Breed</th>
<th>Height</th>
<th>Weight</th>
<th>HealthStatus</th>
<th>Purpose</th>
    </tr>
							 <?php
  $sql = "SELECT id, Animal, Breed, Age, Height, HealthStatus, Purpose from soft";
$result = $con->query($sql);
if($result -> num_rows >0){
  while ($row = $result-> fetch_assoc()) { ?>
            <tr>
            
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["Animal"];?></td>
                <td><?php echo $row["Breed"];?></td>
                <td><?php echo $row["Age"];?></td>
                <td><?php echo $row["Height"];?></td>
				<td><?php echo $row["HealthStatus"];?></td>
				<td><?php echo $row["Purpose"];?></td>
				
                <td>
                <a class="edit_btn" href="patients.php?edit=<?php echo $row['id']; ?>">Edit</a>
                </td>
                <td>
                <a class="del_btn" href="patients.php?del=<?php echo $row['id']; ?>">DELETE</a>
                </td>
        <br>
                
            </tr>
        <?php        
                }
                
            }           
        ?>
 </table>

				 </form>
			 </div>

			  <div class="content-4">
				 <form action="" autocomplete="on" method="post">
				 <p>
					 <label for="Animal" class="youmail"> Animal </label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
					 <select name="Animal">
					 	<option>Select Your Animal</option>
					 	<option>Goat</option>
					 	<option>Cow</option>
					 	<option>Cat</option>
						 <option>Sheep</option>
					 </select>
					
				   </p>

				   <p>
				<label for="Vacination" class="youmail">Vacination </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
				<select name ="vacination">
				<option>Select vacination</option>
				<option>Canine Core Vaccines. </option>
				<option>Canine Leptospira Vaccines</option>
				<option>Canine Influenza Virus (CIV)</option>
				</select>
				   </p>


		</form>
		</div>
			
		 </div>
	 </section>
   </div>
 </div>
 </body>
 </html>
 