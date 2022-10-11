<?php

include ("../connection.php");	
session_start();

$errors= array();
      $file_img1 = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $temp = explode(".", $_FILES["image"]["name"]);
      $newfilename = round(microtime(true)) . '.' . end($temp);
      
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 50000000000000){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../upload/".$file_img1. $newfilename);
         $file_img1 = $file_img1. $newfilename;
         echo "Success";
      }else{
         print_r($errors);
      }


$sql="insert into soft(id,Image)
	  Values(null,'$file_img1')"; 
	
	$con->query($sql);


header('location: ../add_animals.php?message=Record is added.');

?>