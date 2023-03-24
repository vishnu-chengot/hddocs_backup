<?php
class Employer{
  public $name;
  protected $staff_strength;
  private $sector;

  
  protected function set_name($name){
    $this->name =$name;
  }

  function get_name(){
    return $this->name;
  }

}

$codilar = new Employer();
$codilar->name ='codilar'; 
$codilar->set_name('corrohealth'); // error its a protected method of the class
$codilar->staff_strength =20; //error beacuse we cant access a protected property
$codilar->sector ='IT'; // error we cant access it its a private property of the class
echo $codilar->get_name();
?>