  <?php
include('db_connect/db.php');


	$log_id=$_GET["log_id"];

	$sql = "delete  from tbl_delivery where log_id = '$log_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();

header("location:delivery.php");

?>		

