<?php

include ("../connection.php");	
session_start();

        $breed=$_POST['breed'];
        $gender=$_POST['gender'];
        $health_status=$_POST['health_status'];
        $age_months=$_POST['age_months'];
        $weight_kg=$_POST['weight_kg'];
        $height_inch=$_POST['height_inch'];
        $grade=$_POST['grade'];
        $broker_commission=$_POST['broker_commission'];
        $purchase_price=$_POST['purchase_price'];
        $inward_fare=$_POST['inward_fare'];
        $purchase_location=$_POST['purchase_location'];
        $issolation_date=$_POST['issolation_date'];
        $buying_broker_name=$_POST['buying_broker_name'];
        $comments=$_POST['comments'];
		
		$create_date=$_POST['create_date'];
		$feed_quantity=$_POST['feed_quantity'];		
		$feed_rate=$_POST['feed_rate'];
        $image=$_POST['image'];
        
        
   
        $sql="update add_animals set breed = '$breed', gender = '$gender', health_status = '$health_status', age_months = '$age_months', weight_kg = '$weight_kg', height_inch = '$height_inch', broker_commission = '$broker_commission', purchase_price = '$purchase_price', inward_fare = '$inward_fare', purchase_location = '$purchase_location', issolation_date = '$issolation_date', buying_broker_name = '$buying_broker_name', comments = '$comments' where id='".$_GET['id']."'"; 
	
        $con->query($sql);
    
    
    header('location: ../View_detail.php?message=Record is changed.');
    add_animals
    ?>        