<?php
$servername = "mysql";
$username = "root";
$password = "1234";
echo "hi";
// Create connection
$conn = new mysqli("mysql", "root", "secret");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE tea_store";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
