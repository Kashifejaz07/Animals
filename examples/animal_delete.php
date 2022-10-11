<?php
$con = mysqli_connect("localhost","root","","Live_stock");
$g_id=$_GET['pid'];
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con,"DELETE FROM Animal WHERE a_id='$g_id'");
mysqli_close($con);
header("Location: dashboard.php");
?> 