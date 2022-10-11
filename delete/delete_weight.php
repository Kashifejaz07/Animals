<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM weight WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../weight.php?message=Record is removed.');
			
		
?>