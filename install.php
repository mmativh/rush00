<?php
	$servername = "localhost";
	$username = "root";
	$password = "w1Shoni98";
	$dbname = "mydb";

	// create connection
	$conn = mysqli_connect($servername, $username, $password);

	// check database connection
	if (!$conn)
	{
		die("Connection failed: ". mysqli_connect_error()) . "<br/>";
	}

	echo "Deleting database: " . "'$dbname'" . "<br/>";
	
	$sql = "DROP DATABASE $dbname";
	if (mysqli_query($conn, $sql)) {
		echo "'$dbname' successfully deleted" . "<br/>";
	}
	else
	{
		echo "Error deleting '$dbname': " . mysqli_error($conn) . "<br/>";
	}

	// create database
	$sql = "CREATE DATABASE myDB";
	if (mysqli_query($conn, $sql))
	{
		echo "Database '$dbname' created successfully" . "<br/";
	}
	else
	{
		echo "Error creating database: " . mysqli_error($conn) . "<br/>";
	}

	// connect to new database
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn)
	{
		die("Connection failed: ". mysqli_connect_error()) . "<br/>";
	}

	// create table
	$sql = "CREATE TABLE userInfo (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(255) NOT NULL,
		lastname VARCHAR(255) NOT NULL,
		pass VARCHAR(255),
		email VARCHAR(255),
		permission INT(6)
		)";

	// check if table creation is successful
	if (mysqli_query($conn, $sql))
	{
		echo "Table userInfo created successfully" . "<br/>";
	}
	else
	{
		echo "Error creating table: " . mysqli_error($conn) . "<br/>";
	}

	// insert demo users
	$sql = "INSERT INTO userInfo (firstname, lastname, pass, email, 			permission)
			VALUES ('John', 'Doe', 'john123', 'john@example.com', 0);";
	$sql .= "INSERT INTO userInfo (firstname, lastname, pass, email, 			permission)
			VALUES ('Mary', 'Moe', 'mary123', 'mary@example.com', 0);";
	$sql .= "INSERT INTO userInfo (firstname, lastname, pass, email, 			permission)
			VALUES ('Julie', 'Joe', 'julie123', 'julie@example.com', 0);";
	$sql .= "INSERT INTO userInfo (firstname, lastname, pass, email, 			permission)
			VALUES ('Peter', 'Toe', 'peter123', 'peter@example.com', 0);";
	$sql .= "INSERT INTO userInfo (firstname, lastname, pass, email, 			permission)
			VALUES ('Jack', 'Noe', 'jack123', 'jack@example.com', 0);";

	// check if entering users was successful
	if (mysqli_multi_query($conn, $sql))
	{
		echo "User records created successfully" . "<br/>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br/>";
	}

	// connect to new database
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn)
	{
		die("Connection failed: ". mysqli_connect_error()) . "<br/>";
	}

	// create table
	$sql = "CREATE TABLE productInfo (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		category VARCHAR(255),
		productName VARCHAR(255) NOT NULL,
		price INT(6) NOT NULL,
		stock INT(6) NOT NULL
		)";

	// check if table creation is successful
	if (mysqli_query($conn, $sql))
	{
		echo "Table productInfo created successfully" . "<br/>";
	}
	else
	{
		echo "Error creating table: " . mysqli_error($conn) . "<br/>";
	}

	// insert demo products
	$sql = "INSERT INTO productInfo (category, productName, price, stock)
			VALUES ('Puma', 'PumaShoe1', 600, 11);";
	$sql .= "INSERT INTO productInfo (category, productName, price, stock)
			VALUES ('Nike', 'NikeShoe1', 500, 16);";
	$sql .= "INSERT INTO productInfo (category, productName, price, stock)
			VALUES ('Nike', 'NikeShoe2', 800, 3);";
	$sql .= "INSERT INTO productInfo (category, productName, price, stock)
			VALUES ('Adidas', 'AdidasShoe1', 1000, 5);";
	$sql .= "INSERT INTO productInfo (category, productName, price, stock)
			VALUES ('Adidas', 'AdidasShoe2', 1200, 7);";
	$sql .= "INSERT INTO productInfo (category, productName, price, stock)
			VALUES ('Puma', 'PumaShoe2', 400, 2);";

	// check if entering products was successful
	if (mysqli_multi_query($conn, $sql))
	{
		echo "Product records created successfully" . "<br/>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br/>";
	}

	// close the connection
	mysqli_close($conn);
?>