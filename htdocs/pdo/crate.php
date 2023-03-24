<?php
require('dbconnection.php');

$msg ='';
$isValid = TRUE;
if(isset($_POST['submit'])){



$stmt = $conn->prepare("SELECT * FROM employee_tb WHERE email_id=:email");
$stmt->bindParam(':email', $_POST['email']);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
  // email already exists in database
  $msg = "Email already exists.";
  $isValid = FALSE;
}

// Check if phone number exists
$stmt = $conn->prepare("SELECT * FROM employee_tb WHERE phone_number=:phone");
$stmt->bindParam(':phone', $_POST['phonenumber']);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
  // phone number already exists in database
  $msg= "Phone number already exists.";
   $isValid = FALSE;
}

if ($isValid) {
  

$stmt = $conn->prepare("INSERT INTO employee_tb (first_name,last_name , email_id , emp_password ,phone_number) 
VALUES (:first_name,:last_name, :email_id, :emp_password, :phone_number)");
$stmt->bindParam(':first_name', $first_name);
$stmt->bindParam(':last_name', $last_name);
$stmt->bindParam(':email_id', $email);
$stmt->bindParam(':emp_password', $password);
$stmt->bindParam(':phone_number', $phone_number);


// set parameters and execute
$first_name =$_POST['fname'];
$last_name =$_POST['lname'];
$email =$_POST['email'];
$password =$_POST['password'];
$phone_number =$_POST['phonenumber'];

$stmt->execute();

$msg = "New record created successfully";
}

}

?>