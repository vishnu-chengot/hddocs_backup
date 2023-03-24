<?php
include("databaseconnection.php");
$sql ="SELECT MAX(subject1) FROM student_tb";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h1> max value:".$row['MAX(subject1)']."</h1>";

$sql1 ="SELECT MIN(subject1) FROM student_tb";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

echo "<h1> min value:".$row1['MIN(subject1)']."</h1>";

$sql2 ="SELECT AVG(subject1) FROM student_tb";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();

echo "<h1> avg value:".$row2['AVG(subject1)']."</h1>";

$sql3 ="SELECT count(subject1) FROM student_tb";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();

echo "<h1> total count:".$row3['count(subject1)']."</h1>";


$sql4 ="SELECT sum(subject1) FROM student_tb";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();

echo "<h1> total sum:".$row4['sum(subject1)']."</h1>";
?>