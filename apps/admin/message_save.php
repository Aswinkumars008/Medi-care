<?php
include('../shops/db_connect/db.php');


	$msg_id=$_POST["msg_id"];
	$date=$_POST["date"];
	$msge=$_POST["msge"];
	

$sql = "update tbl_message set rdate='$date', reply='$msge' where msg_id='$msg_id'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:message.php");

?>						
