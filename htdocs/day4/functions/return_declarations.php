<?php
declare(strict_types=1);
function studentMarkAdd( int $x,int $y):int{
  return $x+$y;

}

function studentMarkAdd1( float $x,float $y):int{ #return key word is integer
  return (int)$x+(int)$y; # data type is changed into integer

}

echo studentMarkAdd(22,3)."<br>"; #input is in int return also be integer
echo studentMarkAdd1(32.1,3.8); #input is float but return will be in integer


?>
