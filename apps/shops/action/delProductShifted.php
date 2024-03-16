  <?php
include('../db_connect/db.php');


	$delproid=$_GET["delproid"];

	$sql = "delete  from tbl_order where id = '$delproid'";
	$q1 = $db->prepare($sql);
	$q1->execute();

header("location:../inbox.php");

?>		

