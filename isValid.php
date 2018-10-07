<?php
	session_start();
	if ($_SESSION['id'] and $_SESSION['id'] != 0)
		echo "successfulOrder.php";
	else
		echo "signin.php";
?>