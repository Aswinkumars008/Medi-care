<?php
	//Start session
	session_start();
	
	include('db_connect/db.php');
		
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
	//Create query
	$qry = $db->prepare("SELECT * FROM tbl_shops WHERE email='$username' AND password='$password'");
	$qry->execute();
	$count = $qry->rowcount();
	
	
	//Check whether the query was successful or not
	if($count > 0) {
		//Login Successful
		session_regenerate_id();
		$rows = $qry->fetch();
		$_SESSION['SESS_SHOPS_ID'] = $rows['log_user'];
		session_write_close();
		header("location: dashboard.php");
		exit();
	}	
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password Try Again'); window.location='login.php'</script>";
		exit();
	}
?>
