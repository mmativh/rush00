<?php
	$servername = "localhost";
    $username = "root";
    $password = "wtc123456";
    $dbname = "myDB";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
	}
?>