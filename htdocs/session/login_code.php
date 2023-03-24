<?php
session_start();
$mainerror ='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$cname = $_POST['input_name'];
$cpassword =$_POST['input_password'];
$local_user_name =$_POST['user_name'];
$local_password =$_POST['password'];



if( $cname == $local_user_name && $cpassword ==$local_password){
 $_SESSION["user"] = $local_user_name; 
 echo "your logined";
// echo "<script> window.location.href='home.php'; </script>";
}
else{
  echo "inavild credentials";
}


 }

?>