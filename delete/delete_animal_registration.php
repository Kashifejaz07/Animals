<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM add_animals WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../View_detail.php?message=Record is removed.');
			
		
?>