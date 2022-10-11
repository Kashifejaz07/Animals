<?php
$con = mysqli_connect("localhost","root","","Live_stock");
$g_id=$_GET['aid'];
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con,"DELETE FROM comission WHERE c_id='$g_id'");
mysqli_close($con);
header("Location: agent.php");
?> 