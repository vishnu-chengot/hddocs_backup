<?php
require('databaseconn.php');
$sql = "SELECT * FROM student_tb";
$result = $conn->query($sql);
$updatemsg ='';
if(isset($_GET['msg'])){
  $status =$_GET['msg'];
  if($status ==1){
    $updatemsg ='updated successfuly';
  }
  else{
    $updatemsg ='error';
  }
}
?>

