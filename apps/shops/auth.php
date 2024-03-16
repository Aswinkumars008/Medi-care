<?php
session_start();
if(!isset($_SESSION['SESS_SHOPS_ID']) || (trim($_SESSION['SESS_SHOPS_ID']) == '')) {
	header("location:../");
	exit();
}

?>
