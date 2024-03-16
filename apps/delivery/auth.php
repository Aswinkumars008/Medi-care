<?php
session_start();
if(!isset($_SESSION['SESS_DELIVERY_ID']) || (trim($_SESSION['SESS_DELIVERY_ID']) == '')) {
	header("location:../");
	exit();
}

?>
