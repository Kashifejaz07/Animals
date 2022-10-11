<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM cost WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../add_costs.php?message=Record is removed.');
			
		
?>