<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM status_dashbord WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../status.php?message=Record is removed.');
			
		
?>