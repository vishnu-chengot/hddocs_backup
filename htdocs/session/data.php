<?php
session_start();
  $existingData = file_get_contents('data.json');
   $existingArray = json_decode($existingData, true);
  
 foreach( $existingArray as $userDetails){
  if($userDetails['user_name'] == $_SESSION['user']){
     $namedata = $userDetails['name'];
     $emaildata =$userDetails['email'];
     $phone =$userDetails['phoneNumber'];
     $user_name =$userDetails['user_name'];
  }
}
