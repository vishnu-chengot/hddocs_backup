<?php
require('databaseconnection.php');
  
  
//  $deletemsg ="";
  if(isset($_GET['seller_id'])){
  
    $student_id =$_GET['seller_id'];
  
  echo $seller_id;

  $sql = "DELETE FROM student_tb WHERE id=$student_id";
  
  if($conn->query($sql) === TRUE){
  
    header('location:read.php');
    
  }
  }
  else{
    echo "error";

  }
