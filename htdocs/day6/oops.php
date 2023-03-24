<?php
class food{
  public $name;
  public $price;

  function __construct($name,$price){
    $this->name =$name;
    $this->price =$price;
  }

  function __destruct(){
    echo "$this->name can cost $this->price";
  }
}

$hotelone = new food("biryani",120);
// $hotelone->getMenu();
?>