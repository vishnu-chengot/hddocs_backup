<?php
require('databaseconnection.php');

if(isset($_POST['emaildata'])){
$data =$_POST['emaildata'];
$sql ="SELECT email_id FROM customer_tb WHERE email_id = '$data'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row >0){
  echo 'password is alredy there';
}


// echo "$data";
}




?>