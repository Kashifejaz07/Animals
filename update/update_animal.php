<?php

include ("../connection.php");	
session_start();

		$tag=$_POST['tag'];
		$animal=$_POST['animal'];
		$breed1=$_POST['breed1'];
		$breed2=$_POST['breed2'];
		$weight=$_POST['weight'];
		$purchasep=$_POST['purchasep'];
		$purchasedate=$_POST['purchasedate'];
		$other=$_POST['other'];
		$type=$_POST['type'];
		$age=$_POST['age'];		
		$healthstatus=$_POST['healthstatus'];


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
         move_uploaded_file($file_tmp,"../insert/images/".$file_img1. $newfilename);
         $file_img1 = $file_img1. $newfilename;
         echo "Success";
      }else{
         print_r($errors);
      }

if(empty($file_img1)){
$file_img1=$_SESSION['image'];
}

if($breed2=='' || $breed2!='' || $breed1!=''){	
$breed=$breed1;	
}
if($breed2!='' && $breed1==''){
$breed=$breed2;	
}

$sql="update soft set Tag = '$tag',Animal = '$animal',Breed = '$breed',Weight = '$weight',PurchaseP='$purchasep',purchasedate = '$purchasedate',other='$other',Category = '$type',Age = '$age',Image = '$file_img1',HealthStatus = '$healthstatus' where id='".$_GET['id']."'"; 
	
	$con->query($sql);


header('location: ../View_detail.php?message=Record is changed.');

?>