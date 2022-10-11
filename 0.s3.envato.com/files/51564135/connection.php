<?php
$con = mysqli_connect("localhost","root","","soft");

// Check connection
if ($con)
  {
  echo "<script>alert('test');</script>";
  }
?>