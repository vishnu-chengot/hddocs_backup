<?php
$servername = "localhost";
$username = "root";
$password = "Revathi";
$dbname = "demo";

// Create connection
$mysqli = new mysqli("localhost:8080","vishnu","","demo");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>