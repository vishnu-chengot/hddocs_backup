<?php
require('databaseconnection.php');
$sql = "SELECT * FROM seller_tb";
$result = $conn->query($sql);
$deletemsg ="";
if (isset($_GET['msg'])) {    
  //  echo $_GET['message'];
  
  $msg =$_GET['msg'];
  if($msg == 1){
$deletemsg ='updated successfully';
  }
  else{
   $deletemsg ='hai'; 
  }
  
}

?>