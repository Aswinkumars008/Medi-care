  <?php
include('../db_connect/db.php');


	$productId=$_POST["productId"];
	$productName=$_POST["productName"];
	$catId=$_POST["catId"];
	$brandId=$_POST["brandId"];
	$body=$_POST["body"];
	$price=$_POST["price"];
	$type=$_POST["type"];
	$suplr=$_POST["suplr"];
	
	
	
	
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	move_uploaded_file($_FILES["image"]["tmp_name"], "../../admin/uploads/" . $_FILES["image"]["name"]);
	$photo = $_FILES["image"]["name"];
	
	
	if($photo=="")
	{
$sql = "update tbl_product set productName='$productName',catId='$catId',brandId='$brandId',body='$body',price='$price',type='$type' where productId='$productId'";
$q1 = $db->prepare($sql);
$q1->execute();
	}
	else
	{
	$sql = "update tbl_product set productName='$productName',catId='$catId',brandId='$brandId',body='$body',price='$price',image='uploads/$photo',type='$type' where productId='$productId'";
$q1 = $db->prepare($sql);
$q1->execute();

	}
header("location:../productlist.php");

?>		

