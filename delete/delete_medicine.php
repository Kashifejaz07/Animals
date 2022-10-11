<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM medicine WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../medicine.php?message=Record is removed.');
			
		
?>