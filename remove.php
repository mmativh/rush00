<?php
	session_start();
	unset($_SESSION['basket'][$_GET['productno']]);
	header("location: basket.php");
?>