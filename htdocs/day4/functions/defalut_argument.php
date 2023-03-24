<?php
#function with defalut argument  value 
function sumOfNumbers(int $a ,int $b,int $c=0){
  return $a+$b+$c;
}

$sum = sumOfNumbers(18,48); #by using defalut value type  we can give 2 or 3 parameter 
echo "sum = $sum";

?>
