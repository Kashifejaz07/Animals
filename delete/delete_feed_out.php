<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM feed_out WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../feed_out.php?message=Record is removed.');
			
		
?>