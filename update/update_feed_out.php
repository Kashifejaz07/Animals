<?php

include ("../connection.php");	
session_start();

		
    $tag=$_POST['tag'];
    $animal=$_POST['animal'];
    $animal_id=$_POST['animal_id'];
    $feed_quantity=$_POST['feed_quantity'];
    $feed_rate=$_POST['feed_rate'];
    $animal_counter=$_POST['animal_counter'];
    $feed_animal=$_POST['feed_animal'];
    $feed_cost=$_POST['feed_cost'];
    
   
   
        $sql="update feed_out set tag = '$tag', animal = '$animal', animal_id = '$animal_id' feed_quantity = '$feed_quantity' feed_rate = '$feed_rate' animal_counter = '$animal_counter' feed_animal = '$feed_animal' feed_cost = '$feed_cost'   where id='".$_GET['id']."'"; 
	
        $con->query($sql);
    
    
    header('location: ../feed_out.php?message=Record is changed.');
    feed_out
    ?>        