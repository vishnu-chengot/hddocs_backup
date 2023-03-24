<?php
include('joins\databaseconnection.php');
$sql = "SELECT student_tb.s_name ,student_tb.subject1,student_tb.subject2,student_tb.subject3,department_tb.dpartment_name,department_tb.hod FROM student_tb CROSS JOIN department_tb";
$result =$conn->query($sql);
$row =$result->fetch_assoc();
var_dump($row)
?>