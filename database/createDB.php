<?php 
	/* Основные настройки */
	define(DB_HOST, "localhost");
	define(DB_LOGIN, "root");
	define(DB_PASSWORD, "");

	// устанавливаем соединение
	$conn = new mysqli($servername, $username, $password);
	// проверка соединения
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// Create database
	$sql = "CREATE DATABASE myDB";
	if ($conn->query($sql) === TRUE) {
	  echo "Database created successfully";
	} else {
	  echo "Error creating database: " . $conn->error;
	}
 ?>