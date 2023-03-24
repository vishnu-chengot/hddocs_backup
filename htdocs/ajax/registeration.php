<?php
include('dbconnection.php');

$sql ="SELECT id,name FROM  tbl_countries";

$result =$conn->query($sql);

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['dob']) && !empty($_POST['country']) && !empty($_POST['state']) && !empty($_POST['city']) && !empty($_POST['pincode']) && !empty($_POST['position'])){

  $namedata =$_POST['name'];
  $emaildata =$_POST['email'];
  $phonedata =$_POST['phone'];
  $dobdata =$_POST['dob'];
  $countrydata =$_POST['country'];
  $country_arry = explode('-',$countrydata);
  $countrydata =$country_arry[1];
  
  $statedata =$_POST['state'];
  $state_arry =explode('-',$statedata);
  $statedata =$state_arry[1];
  $citydata =$_POST['city'];
  $city_arry =explode('-',$citydata);
  $citydata =$city_arry[1
];
  $pincodedata =$_POST['pincode'];
  $positiondata =$_POST['position'];

  $sql ="INSERT INTO employee (name,email_id,phone,Dob,country,state,city,pincode,position) VALUES('$namedata','$emaildata',$phonedata,'$dobdata','$countrydata','$statedata','$citydata',$pincodedata,'$positiondata')";

  if($conn->query($sql)){
    echo 'New record created successfully';

  }
  else{
    echo "invalid";
  }
}
?>