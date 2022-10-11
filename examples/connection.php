<?php
$con = mysqli_connect("localhost","live_stock_user","livestockuser","live_stock_db");
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
// Check connection

?>