<?php

include ("../connection.php");	
	
    $id=$_GET['id'];
	
	$sql = "DELETE FROM expense_tab WHERE id='$id'";

	$con->query($sql);
							
		header('Location: ../expense_tab.php?message=Record is removed.');
			
		
?>