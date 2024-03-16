<?php
include('../db_connect/db.php');


	$Log_Id=$_POST["Log_Id"];
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$date=$_POST["date"];
	$msge=$_POST["msge"];
	

$sql = "insert into tbl_message(Log_Id,name,phone,email,date,msge) VALUES ('$Log_Id','$name','$phone','$email','$date','$msge')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../message.php");

?>						
