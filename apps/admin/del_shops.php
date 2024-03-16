  <?php
include('db_connect/db.php');


	$log_id=$_GET["log_id"];

	$sql = "delete  from tbl_shops where log_id = '$log_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();

header("location:shops.php");

?>		

