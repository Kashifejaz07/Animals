<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM sale_animal WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../animal.php?message=Record is removed.');
			
		
?>