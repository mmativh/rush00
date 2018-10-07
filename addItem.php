<?php
	session_start();
	if ($_GET['productno'])
	{
		$_SESSION['basket'][] = $_GET['productno'];
	}
	$_SESSION['basket'] = array_unique($_SESSION['basket']);
?>