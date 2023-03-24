<?php
include('databaseconnection.php');
if(isset($_POST['submit'])){
  $name =$_POST['name'];
  $phone_number =$_POST['phoneno'];
  $email =$_POST['email'];
  $address =$_POST['address'];
  $password =$_POST['password'];
  $password =md5($password);









 $sql = "INSERT INTO student_tb (student_name,phone,email_id,address,password)
VALUES ('$name',$phone_number,'$email','$address','$password')";

if ($conn->query($sql) === TRUE) {
  $mainmsg = "New record created successfully";
  // header("Location:read_html.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  

  

  




}

?>