<?php
require('dbconnection.php');
 $stmt = $conn->query("SELECT * FROM employee_tb");

  // iterate over the result set
  // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //   // access the data for each row using the column name
  //   echo "Name: " . $row["name"] . ", Email: " . $row["email"] . "<br>";
  // }
?>