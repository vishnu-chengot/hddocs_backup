<?php declare(strict_types=1);
function studentMarkAdd( float $x,float $y){
  return $x+$y;

}

echo studentMarkAdd(22.1,23.1); #same data type so no error



echo studentMarkAdd(22.1,"23.1"); #error statement
?>