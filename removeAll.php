<?php
	session_start();
	unset($_SESSION['basket']);
	header("location: basket.php");
?>