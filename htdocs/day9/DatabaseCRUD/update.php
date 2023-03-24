<?php 
require('databaseconnection.php');
// $msg =0;

$seller_id = $_GET['seller_id'];
echo $seller_id;
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT *  FROM seller_tb WHERE id =$seller_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

 $select_array = explode(",",$row['language']);


 

// $dataarry = [];
$nameerror = $passworderror = $phoneerror = $emailerror = $gendererror = $courseerror = $checkerror  = $multiselecterror = $languageerror =  $mainmsg ="";
$namedata = $passworddata = $phonenumberdata = $emaildata = $coursedata = $genderdata = $multiselectdata = $languagedata = $new_languagedata= $skilldata= $mainerror="";

// define("length", 0);
if (isset($_POST['submit'])) {
  $name = $_POST['new_name'];
  $email = $_POST['new_email'];
  $password = $_POST['new_password'];
  $phonenumber = $_POST['new_phonenumber'];
  $gender = $_POST['new_gender'];
  $course = $_POST['new_course'];

  $emailregex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
  $rexSafety = "/^([a-zA-Z' ]+)$/";
  $phoneregex = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";

  $flag =0;
  


  function data($value,$key){
    global $dataarry;
    $dataarry[$key] =$value;
  }

  if (empty($_POST['new_name'])) {
    $nameerror =' please fill the field';



  } else {

    if (preg_match($rexSafety, $name)) {
      $nameerror = '<i class="fa-solid fa-check text-success"></i>';
      // $namedata = $name;
      // data($name,'name');
      $flag +=1;
    } else {

      $nameerror = 'bad name';
    }
  }
  if (empty($_POST['new_email'])) {

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
  if (empty($_POST['new_password'])) {
    $passworderror ='please fill the field';
  } else {
    if (strlen($password) > 12) {
      $passworderror = 'maxlength should be 12';
    } elseif (strlen($password) >= 8) {

      $passworderror = '<i class="fa-solid fa-check text-success"></i>';
      // $passworddata = $password;
      // data($password,'password');
      $flag +=1;
    } else {
      $passworderror = 'week';
    }
  }
  if (empty($_POST['new_phonenumber'])) {
    $phoneerror ='please fill the field';
  } else {
    if (strlen($phonenumber) > 9 and strlen($phonenumber) < 11) {
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
  if ($gender == '') {
    $gendererror = 'please select a option';

  }
   else {
    $gendererror = '<i class="fa-solid fa-check text-success"></i>';
    // $genderdata = $gender;
    // data($gender,'gender');
    $flag +=1;
    
  }
if ($course == 'select course'){
    $courseerror = 'please select';

}else{
    $courseerror ='<i class="fa-solid fa-check text-success"></i>';
    
    // $coursedata = $course;
    // data($course,'course');
    $flag +=1;
}
// if(isset($_POST['check1'])){
//   $checkerror ='<i class="fa-solid fa-check text-success"></i>';
  
// }
// else{
//   $checkerror ='kindily accept the term and condition';
// }
if(!empty($_POST['new_check_list'])){
  $checkarray = [];
  $length = 0;
  
  foreach($_POST['new_check_list'] as $x){
    array_push($checkarray,$x);
    $length = count($checkarray);



  }
  if($length >= 2){
    $skilldata = implode("-",$checkarray);
    
    // data($multiselectdata,'skill');
    $flag +=1;
    $multiselecterror ='<i class="fa-solid fa-check text-success"></i>';

  }else{
    echo $length;
    $multiselecterror ='select at least 2 option';
  }
}
else{
  $multiselecterror ='please select';
}
if(!empty($_POST['new_language'])){
$selectarray = [];
  foreach($_POST['new_language'] as $x ){
    // $new_languagedata .= "$x ,";
    array_push($selectarray,$x);
  }
   $new_languagedata = implode(",",$selectarray);
  // data($languagedata,'language');
  $flag +=1;
  $languageerror ='<i class="fa-solid fa-check text-success"></i>';
} 
else
{
  $languageerror ='please select';
}

if($flag === 8){
  
  $namedata = $name;
  $emaildata = $email;
  $passworddata = $password;
  $phonenumberdata = $phonenumber;
  $genderdata = $gender;
  $coursedata = $course;
  $multiselectdata = $skilldata;
  $languagedata = $new_languagedata;

//   $sql = "INSERT INTO seller_tb (seller_name,email_id,password,phone_number,gender,course,skill,language)
// VALUES ('$namedata', '$emaildata',$passworddata, $phonenumberdata, '$genderdata','$coursedata','$multiselectdata','$languagedata')";

$sql = "UPDATE seller_tb SET seller_name = '$namedata ',email_id ='$emaildata' ,password ='$passworddata',phone_number =$phonenumberdata,gender='$genderdata',course ='$coursedata',skill ='$multiselectdata',language ='$languagedata' WHERE id= $seller_id";

  $flag =0;
  if($conn->query($sql) === TRUE){
$msg ="sucessfully updated";

header('Location:read_html.php?msg=1');
}
else{
  echo 'not updated';
}


}
else {
  $mainmsg = 'please fill all the feild';
}
// print_r($dataarry);


}
?>





