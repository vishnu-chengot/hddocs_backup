<?php
interface calculate1{
  public function area_rectangle($l,$b);
}

interface calculate2{
  public function area_circle($r);
}

class Area implements calculate1,calculate2{
public $l;
public $b;
public $r;
public function area_rectangle($l,$b){
  $this->l =$l;
  $this->b =$b;
   return $this->l*$this->b;
}

public function area_circle($r){
   $this->r =$r;
   return 3.14*$this->r**2;
}

}

$input1 = new Area(); 
echo $input1->area_circle(2);
echo '<br>';
echo $input1->area_rectangle(2,4);

?>
