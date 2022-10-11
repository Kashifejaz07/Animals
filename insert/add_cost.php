<?php

include ("../connection.php");	
session_start();

$tag=$_POST['tag'];
$purchase_price=$_POST['purchase_price'];
$transportation=$_POST['transportation'];
$purchase_commission=$_POST['purchase_commission'];
$sales_commission=$_POST['sales_commission'];
$medicine=$_POST['medicine'];
$feed=$_POST['feed'];
$misc=$_POST['misc'];


$sql="insert into cost(id,tag,purchase_price,transportation,purchase_commission,sales_commission,medicine,feed,misc)
	  Values(null,'$tag','$purchase_price','$transportation','$purchase_commission','$sales_commission','$medicine','$feed','$misc')"; 
	
	$con->query($sql);


header('location: ../add_costs.php?message=Record is added.');

?>