<?php
	include "includes/connect.php";
	session_start();

	$sql = "SELECT * FROM `productinfo`";
	$result = mysqli_query($conn, $sql);
	$price = 0;
	while ($array = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		foreach ($_SESSION['basket'] as $index => $item)
		{
			if ($array['id'] == $item)
			{
				$price += $array['price'];
			}
		}
	}
	echo "R " . $price;
?>