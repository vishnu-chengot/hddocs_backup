<?php
function addData()
{   
      $name =$_POST['fname'];
      $email =$_POST['email'];
      $phone =$_POST['phoneno'];
      $password =$_POST['password'];
      $user_name =$_POST['username'];
      $existingData = file_get_contents('data.json');
      $existingArray = json_decode($existingData, true);

      // foreach ( as $existingData) {
        if (isset($existingArray[$user_name])) {
            // If username exists, return an error message or do something else
            // echo "<script>alert('Username already exists');</script>";
            $msg ='Username already exists';
            header("Location:sign_up.php?msg");
            exit();
            
      }
      else{
      $data =array(
      "user_name"=>$user_name,
      "name"=>$name,
      "email"=>$email,
      "phoneNumber"=>$phone,
      "password"=>$password,

      );

      array_push($existingArray, $data);
      $jsonData = json_encode($existingArray, JSON_PRETTY_PRINT);
      file_put_contents('data.json', $jsonData);
      header("Location:sign_up.php");
      
      }
//     }

      
     
      
}

if (file_get_contents('data.json') == null) {

      file_put_contents('data.json', '[]');
     
}

addData();

// $fileSizeBefore = filesize('data.json');



// $fileSizeAfter = filesize('data.json');

// if ($fileSizeAfter > $fileSizeBefore) {
//   echo "Data was successfully submitted";
// } else {
//   echo "There was an error submitting the data";
// }


?>