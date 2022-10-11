<?php

$con = mysqli_connect("localhost","Live_stockuser","Livestock123!","Live_stock");

$gid=$_GET['aid'];
$select1=mysqli_query($con,"SELECT * FROM `soft` WHERE id='$gid'");
$select=mysqli_query($con,"SELECT * FROM `soft` WHERE id='$gid'");



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

  </head>
  
  <style>
      <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    
  overflow: hidden;
      background: rgba(0, 0, 0, 0.78);
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
  </style>

  <body>
      
<div class="topnav" id="myTopnav">
   <a href="../index.php">ANIMAL REGISTRATION</a>
   <a href="../categories.php">CATEGORY</a>
   <a href="../View_detail.php">HERD DETAIL</a>
  <a href="../isolation.php">ISOLATION</a>
    
      <a href="../vaccination.php">MEDICINE</a>
    <a href="../Vacination_detail.php">VACCINATION</a>
      <a href="../weight.php">WEIGHT</a>
      <a href="../Birth.php">BIRTH</a>
   
      <a href="../Sale.php">SALE</a>
    
      <a href="../View_feed.php">FEED</a>
      <a href="../View_Total.php">REPORT</a>
      <a href="../examples/dashboard.php">Admin Dashboard</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


    <main class="container">


       
      <div class='left-column'>
     
      <?php
      
      while($row=mysqli_fetch_array($select))
{ 
    echo "
        <img data-image='red' class='active' src='../upload/$row[3]' alt='' style='width: 70%;height:auto;margin-top:115px;border: 3px solid white;'>

     <h1 style='color:white;'>$row[0]</h1>
     <div class='print'>
    <a href='../history.php?pid=$row[0]' style='color:white;'>Print</a>    
     </div>
           
";} ?>
     
      
      </div>
     
      


      <!-- Right Column -->
      
 
      <div class='right-column'>

   
       <?php
      
      while($row=mysqli_fetch_array($select1))
{ 
    echo "
    
        <div class='product-price'>
          <span>Animal</span>
          <p>$row[1]</p>
          
        </div>


         <div class='product-price'>
          <span>Date Of Birth</span>
          <p>$row[2]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Breed</span>
          <p>$row[4]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Gender</span>
          <p>$row[18]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Health Status</span>
          <p>$row[8]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Age (Months)</span>
          <p>$row[7]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Weight (Kg)</span>
          <p>$row[5]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Height (Inch)</span>
          <p>$row[6]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Grade</span>
          <p>$row[10]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Purpose</span>
          <p>$row[9]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Purchase Price (PKR)</span>
          <p>$row[11]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Inward Fare (PKR)</span>
          <p>$row[12]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Purchase Location</span>
          <p>$row[14]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Purchase Date</span>
          <p>$row[15]</p>
          
        </div>
        
         <div class='product-price'>
          <span>Isolation Date (Till)</span>
          <p>$row[16]</p>
        </div>
        
         <div class='product-price'>
          <span>Buying Broker Name</span>
          <p>$row[13]</p>
        </div>
        
         <div class='product-price'>
          <span>Broker Commission (%)</span>
          <p>$row[17]</p>
        </div>
        
         <div class='product-price'>
          <a href='../Vacination_detail.php?pid=$row[0]'> <span>Vacination</span></a>
        </div>
        <br>
         <div class='product-price'>
         <a href='../weight.php?pid=$row[0]'> <span>Weight (click here)</span></a>
        </div>
        
        
         <div class='product-price'>
          <span>Comment</span>
          <p>The NNJN</p>
        </div>


";}?>





  
        
      </div> 
      
      
      
      
      
    </main>
    
    
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
