<?php
namespace customer;
class home{
 public $name;
 public $email;
 public $phone_number;
  function __construct($name,$email,$phone_number){
    $this->name =$name;
    $this->email =$email;
    $this->phone_number =$phone_number;
    echo "<h1> Welcome $this->name (customer)!</h1>";
  }

  function profile(){
 echo "<h1> name:$this->name , Email:$this->email , Phone Number:$this->phone_number</h1>";

  }
}

// $customer1 =new home('vishnu','vishnu.chengot@gmail',9072879546);
// $customer1->profile();

?>