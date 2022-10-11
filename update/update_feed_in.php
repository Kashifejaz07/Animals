<?php

include ("../connection.php");	
session_start();

		
		$create_date=$_POST['create_date'];
		$feed_quantity=$_POST['feed_quantity'];		
		$feed_rate=$_POST['feed_rate'];
        $image=$_POST['image'];
   
        $sql="update feed_in set create_date = '$create_date', feed_quantity = '$feed_quantity', feed_rate = '$feed_rate', image = '$image' where id='".$_GET['id']."'"; 
	
        $con->query($sql);
    
    
    header('location: ../feed_in.php?message=Record is changed.');
    feed_in
    ?>        