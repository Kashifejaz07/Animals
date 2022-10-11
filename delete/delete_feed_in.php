<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM feed_in WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../feed_in.php?message=Record is removed.');
			
		
?>