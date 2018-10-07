<?php
	$servername = "localhost";
    $username = "root";
    $password = "w1Shoni98";
    $dbname = "myDB";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
	}
?>