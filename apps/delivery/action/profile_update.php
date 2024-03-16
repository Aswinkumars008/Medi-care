<?php
include('../db_connect/db.php');


	$Log_Id=$_POST["Log_Id"];
	
	$name=$_POST["name"];
	$address=$_POST["address"];
	$city=$_POST["city"];
	$country=$_POST["country"];
	$zip=$_POST["zip"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	
if($password=="")
{
$sql = "update tbl_shops set name='$name',address='$address',city='$city',country='$country',zip='$zip',phone='$phone',email='$email' where log_user='$Log_Id'";
$q1 = $db->prepare($sql);
$q1->execute();
}
else
{
$sql = "update tbl_shops set name='$name',address='$address',city='$city',country='$country',zip='$zip',phone='$phone',email='$email',password='$password' where log_user='$Log_Id'";
$q1 = $db->prepare($sql);
$q1->execute();	
}
header("location:../dashboard.php");
?>						
