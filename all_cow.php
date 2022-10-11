<?php
include ("nav.html");


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 100%;
    background: url(http://khaitonline.com/Bakra/css/bg.jpg)no-repeat center top;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-attachment: fixed;
    background-position: center;
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
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;

}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

img{
  width: 100%;
  height: 300px;

  border: 3px solid white;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }

  img{
  width: 100%;
  height: 300px;
}
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }

  img{
  width: 100%;
  height: 300px;
}
}
</style>

<style>

.text {

  border: 3px solid white;
  background-color: brown;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
  text-align: center;
}

</style>
<body>


<!-- Header -->
<div class="header">
  <h1 style="color:red;">GOAT</h1>
</div>

<!-- Photo Grid -->
<div class="row">

  <div class='column'>
   <a href='View_all_cow.php'> <img src='upload/55edf88c2e892.jpg'  ></a>
    
   <div class='text'>All</div>
 </div>

 <div class='column'>
   <a href='View_cowfattening.php'> <img src='upload/cattle_fattening.jpg'  ></a>
    
   <div class='text'>Fattening</div>
 </div>
 
  <div class='column'>
   <a href='View_cowbreeding.php'> <img src='upload/cattle_fattening.jpg'  ></a>
    
   <div class='text'>Breeding</div>
 </div>

 <div class='column'>
   <a href='View_cowmilking.php'> <img src='upload/cattle_fattening.jpg'  ></a>
    
   <div class='text'>Milking</div>
 </div>


</div>

</body>
</html>
