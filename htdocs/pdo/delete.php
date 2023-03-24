<?php
require('dbconnection.php');
if(isset($_GET['id'])){
$stmt = $conn->prepare('DELETE FROM employee_tb WHERE emp_id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
// Bind the parameter(s)
$id = $_GET['id']; 
echo $id;

 $stmt->execute();
header("Location:read_html.php");
}

?>