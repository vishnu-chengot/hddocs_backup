<?php
// session_start();

require('databaseconnection.php');
$seller_id  = $_SESSION['customer'];
$sql ="SELECT * FROM customer_tb WHERE id = $seller_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>