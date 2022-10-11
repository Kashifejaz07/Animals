<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM add_animals WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../index.php?message=Record is removed.');
			
		
?>