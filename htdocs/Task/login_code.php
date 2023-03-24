<?php
require('databaseconn.php');
$mainerror ='';
if(isset($_POST['submit'])){
$cname = $_POST['cname'];
$cpassword =$_POST['cpassword'];
$cpassword =md5($cpassword);

// $sql = "SELECT id  FROM customer_tb WHERE ";


$sql ="SELECT id ,password,email_id FROM teacher_tb WHERE email_id='$cname' and password ='$cpassword'";
$result = $conn->query($sql);

 if($conn->query($sql)== TRUE){
  $row = $result->fetch_assoc();
  if($row['email_id'] == $cname && $row['password']==$cpassword ){
    $_SESSION["teacher"] = $row['id'];
  
  $mainerror = "sucess";
  header("location:old_dashboard.php");
  }
  else{
    $mainerror ="invalid cerdential";
  }
  


 }
 else{
 $mainerror ='invalid cerdential';
 }
}

?>