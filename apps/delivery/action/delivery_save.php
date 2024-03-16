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
	
	
	
$sql = "insert into tbl_delivery(log_user,name,address,city,country,zip,phone,email,password) VALUES ('$Log_Id','$name','$address','$city','$country','$zip','$phone','$email','$password')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../login.php");

?>						
