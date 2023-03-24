<?php
interface calculate{
  public function area($a);
  // public function volume($a);
}

class square implements calculate{
  public $a;
  public function area($a){
    $this->a =$a;
    $x=$this->a**2;
    return $x;
  }

}
class circle implements calculate{
  public $r;
  const PI =3.1416;
  public function area($r){
    $this->r =$r;
    $x =self::PI*$this->r**2;
    return $x;
  }

}

class sphere implements calculate{
  public $r;
  const PI =3.1416;
  public function area($r){
    $this->r =$r;
    $x=4*self::PI*$this->r**2;
    return $x;

  }
}

$square = new square();
echo $square->area(4);
echo'<br>';
$circle = new circle();
echo $circle->area(2);
echo'<br>';
$sphere = new sphere();
echo $sphere->area(2);
// echo'<br>';



?>