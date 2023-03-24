
<?php
require('databaseconnection.php');
// $dataarry = [];
$nameerror = $passworderror = $phoneerror = $emailerror = $gendererror = $courseerror = $checkerror  = $multiselecterror = $languageerror =  $mainmsg ="";
$namedata = $passworddata = $phonenumberdata = $emaildata = $coursedata = $genderdata = $multiselectdata = $languagedata = $new_languagedata= $skilldata= $mainerror="";

// define("length", 0);
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phonenumber = $_POST['phonenumber'];
  $gender = $_POST['flexRadioDefault'];
  $course = $_POST['course'];

  $emailregex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
  $rexSafety = "/^([a-zA-Z' ]+)$/";
  $phoneregex = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";

  $flag =0;
  


  function data($value,$key){
    global $dataarry;
    $dataarry[$key] =$value;
  }

  if (empty($_POST['name'])) {
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
  if (empty($_POST['password'])) {
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
  if (empty($_POST['phonenumber'])) {
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
if(isset($_POST['check1'])){
  $checkerror ='<i class="fa-solid fa-check text-success"></i>';
  
}
else{
  $checkerror ='kindily accept the term and condition';
}
if(!empty($_POST['check_list'])){
  $checkarray = [];
  $length = 0;
  
  foreach($_POST['check_list'] as $x){
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
if(!empty($_POST['language'])){
$selectarray = [];
  foreach($_POST['language'] as $x ){
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
  // data($name,'name');
  // data($email,'email');
  // data($password,'password');
  // data($phonenumber,'phonenumber');
  // data($gender,'gender');
  // data($course,'course');
  // data($multiselectdata,'skill');
  // data($languagedata,'language');
  $sql ="SELECT email_id FROM seller_tb WHERE email_id ='$email'";
  if($conn->query($sql)== TRUE){
 $passworderror ='email is already exisit';
 $flag =0;
  }
  else{
    
  $namedata = $name;
  $emaildata = $email;
  $passworddata = $password;
  $phonenumberdata = $phonenumber;
  $genderdata = $gender;
  $coursedata = $course;
  $multiselectdata = $skilldata;
  $languagedata = $new_languagedata;

  $sql = "INSERT INTO seller_tb (seller_name,email_id,password,phone_number,gender,course,skill,language)
VALUES ('$namedata', '$emaildata',$passworddata, $phonenumberdata, '$genderdata','$coursedata','$multiselectdata','$languagedata')";

if ($conn->query($sql) === TRUE) {
  $mainmsg = "New record created successfully";
  // header("Location:read_html.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    $flag =0;
  }

  

  
}
else {
  
  $mainmsg = 'please fill all the feild';
  $flag =0;
}
// print_r($dataarry);


}
?>

