<?php
include('../db_connect/db.php');


	$productName=$_POST["productName"];
	$catId=$_POST["catId"];
	$brandId=$_POST["brandId"];
	$body=$_POST["body"];
	$price=$_POST["price"];
	$type=$_POST["type"];
	$suplr=$_POST["suplr"];
	$address=$_POST["address"];
	$phone=$_POST["phone"];
	
	
	
	
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	move_uploaded_file($_FILES["image"]["tmp_name"], "../../admin/uploads/" . $_FILES["image"]["name"]);
	$photo = $_FILES["image"]["name"];
	
	
$sql = "insert into tbl_product(productName,catId,brandId,body,price,image,type,suplr,address,phone) values('$productName','$catId','$brandId','$body','$price','uploads/$photo','$type','$suplr','$address','$phone')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../productlist.php");

?>		

