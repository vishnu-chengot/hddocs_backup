<?php
include('databaseconn.php');
$sql = "SELECT *  FROM student_tb WHERE email_id ='vishnu.chengot@gmail.com'";
$result = $conn->query($sql);
// $row = $result->fetch_assoc();
echo '<br>';
//  $num = $result->num_rows;
// echo $num;
var_dump($result->field_count);
// $result['num_rows'];

?>
