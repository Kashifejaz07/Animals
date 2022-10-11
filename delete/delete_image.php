<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM image WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../image.php?message=Record is removed.');
			
		
?>