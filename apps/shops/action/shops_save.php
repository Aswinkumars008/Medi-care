<?php
include('../db_connect/db.php');


	$Log_Id="SHP".rand(789645002,0);
	
	$name=$_POST["name"];
	$address=$_POST["address"];
	$city=$_POST["city"];
	$country=$_POST["country"];
	$zip=$_POST["zip"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	$licenseno=$_POST["licenseno"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../cert/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
$sql = "insert into tbl_shops(log_user,name,address,city,country,zip,phone,email,password,licenseno,photo) VALUES ('$Log_Id','$name','$address','$city','$country','$zip','$phone','$email','$password','$licenseno','$photo')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../login.php");

?>						
