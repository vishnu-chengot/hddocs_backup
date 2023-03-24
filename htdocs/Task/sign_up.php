<?php
require('databaseconn.php');
// $dataarry = [];
$nameerror = $passworderror = $phoneerror = $emailerror = $gendererror = $usernameerror = $checkerror  = $multiselecterror = $languageerror =  $mainmsg ="";
$fnamedata = $passworddata = $phonenumberdata = $emaildata = $usernamedata =$lnamedata = $mainerror="";


if(isset($_POST['submit'])){
  $fname =$_POST['fname'];
  // $lname =$_POST['lname'];
  // $user_name =$_POST['username'];
  $phone_number =$_POST['phoneno'];
  $password=$_POST['password'];
  $conform_password =$_POST['confor_password'];
  $email =$_POST['email'];

  $flag =0;

   $emailregex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
  $rexSafety = "/^([a-zA-Z' ]+)$/";
  $phoneregex = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";

  if (empty($_POST['fname'])) {
    $nameerror =' please fill the field';



  } else {

    if (preg_match($rexSafety, $fname)) {
      $nameerror = '<i class="fa-solid fa-check text-success"></i>';
      // $namedata = $name;
      // data($name,'name');
      $flag +=1;
    } else {

      $nameerror = 'bad name';
    }
  }
  // if(empty($_POST['username'])){
  //   $usernameerror ='please fill the feild';
  // }
  // else{
  //   $usernameerror = '<i class="fa-solid fa-check text-success"></i>';
  //    $flag +=1;
  // }

  if (empty($_POST['email'])) {

    $emailerror ='please fill the field';

  } else {
    if (preg_match($emailregex, $email)) {
      $emailerror = '<i class="fa-solid fa-check text-success"></i>';
      // $emaildata = $email;
      // data($email,'email');
      $flag +=1;
    } else {

      $emailerror = 'please fill valid email';
    }
  }
  if (empty($_POST['password']) && empty($_POST['confor_password'])) {
    $passworderror ='please fill the field';
  } else {
    if (strlen($password) > 12 && strlen($conform_password) > 12 ) {
      $passworderror = 'maxlength should be 12';
    } elseif (strlen($password) >= 8 && strlen($conform_password) >= 8) {
       if($password == $conform_password){
            $passworderror = '<i class="fa-solid fa-check text-success"></i>';
      // $passworddata = $password;
      // data($password,'password');
      $flag +=1;
       } 
       else{
        $passworderror ="password is not match";
       }

      
    } else {
      $passworderror = 'week';
    }
  }
  if (empty($_POST['phoneno'])) {
    $phoneerror ='please fill the field';
  } else {
    if (strlen($phone_number) > 9 and strlen($phone_number) < 11) {
      $phoneerror = '<i class="fa-solid fa-check text-success"></i>';
      // $phonenumberdata = $phonenumber;
      // data($phonenumber,'phonenumber');
      $flag +=1;

    }
    //  elseif(preg_match($phoneregex,$phoneerror)){
    //   $phoneerror = 'perfect';

    // }
    else {
      $phoneerror = 'should be 10 digit';
    }
  }

  if($flag === 4){
  // data($name,'name');
  // data($email,'email');
  // data($password,'password');
  // data($phonenumber,'phonenumber');
  // data($gender,'gender');
  // data($course,'course');
  // data($multiselectdata,'skill');
  // data($languagedata,'language');
//   $sql ="SELECT email_id FROM customer_tb WHERE email_id ='$email'";
//   if($conn->query($sql)== TRUE){
//  $emailerror ='email is already exisit';
//  $flag =0;
//   }
  // else{
    
  $fnamedata = $fname;
  $emaildata = $email;
  $passworddata = md5($password);
  $phonenumberdata = $phone_number;
  // $usernamedata =$user_name;
  // $lnamedata =$lname;



  $sql = "INSERT INTO teacher_tb (teacher_name,email_id,phone_number,password)
VALUES ('$fnamedata','$emaildata',$phonenumberdata,'$passworddata')";

if ($conn->query($sql) === TRUE) {
  $mainmsg = "New record created successfully";
  // header("Location:read_html.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    $flag =0;
  // }

  

  
}
else {
  
  $mainmsg = 'please fill all the feild';
  $flag =0;
}

}
?>
