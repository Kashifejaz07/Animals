<?php

include ("../connection.php");	
session_start();

$date=$_POST['date'];
$animal_count=$_POST['animal_count'];
$milk_production=$_POST['milk_production'];
$quantity_counter=$_POST['quantity_counter'];
$rate_counter=$_POST['rate_counter'];
$milk_sold=$_POST['milk_sold'];
$animal_sold=$_POST['animal_sold'];

$sql="insert into milk_sale(id,date,animal_count,milk_production,quantity_counter,rate_counter,milk_sold,animal_sold)
	  Values(null,'$date','$animal_count','$milk_production','$quantity_counter','$rate_counter','$milk_sold','$animal_sold')"; 
	
	$con->query($sql);


header('location: ../add_milk_sale.php?message=Record is added.');

?>