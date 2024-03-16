  <?php
include('db_connect/db.php');


	$id=$_GET["id"];

	$sql = "delete  from tbl_customer where id = '$id'";
	$q1 = $db->prepare($sql);
	$q1->execute();

header("location:retailer.php");

?>		

