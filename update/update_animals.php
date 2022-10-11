<?php

include ("../connection.php");	
session_start();

		
		$create_date=$_POST['create_date'];
		$Purpose=$_POST['Purpose'];		
		$Animal=$_POST['Animal'];
   
   
        $sql="update add_animals set create_date = '$create_date', Purpose = '$Purpose', Animal = '$Animal' where id='".$_GET['id']."'"; 
	
        $con->query($sql);
    
    
    header('location: ../index.php?message=Record is changed.');
    feed_in
    ?>        