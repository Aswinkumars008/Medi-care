  <?php
include('../db_connect/db.php');


	$shiftid=$_GET["shiftid"];

	$sql = "update tbl_order set dst ='Delivered' where id = '$shiftid'";
	$q1 = $db->prepare($sql);
	$q1->execute();

header("location:../inbox.php");

?>		

