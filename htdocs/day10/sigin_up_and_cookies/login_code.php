<?php
require('databaseconnection.php');
$mainerror ='';
if(isset($_POST['submit'])){
$cname = $_POST['cname'];
$cpassword =$_POST['cpassword'];
$cpassword =md5($cpassword);

// $sql = "SELECT id  FROM customer_tb WHERE ";


$sql ="SELECT id,username,cpassword,email_id FROM customer_tb WHERE email_id ='$cname' or username='$cname' and cpassword ='$cpassword'";
$result = $conn->query($sql);

 if($conn->query($sql)== TRUE){
  $row = $result->fetch_assoc();
  if($row['email_id'] == $cname && $row['cpassword']==$cpassword ){
    $_SESSION["customer"] = $row['id'];
  
  $mainerror = "sucess";
  header("location:home.php");
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