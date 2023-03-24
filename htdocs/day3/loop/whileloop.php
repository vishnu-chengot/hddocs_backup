<?php
#number is amstrong or not using while loop

$num = 153;
$new_num =153;
$sum = 0;

while($num >0){
$num2 = $num%10;
$sum += $num2**3;
$num = $num / 10; 
}
echo $sum;
if ($new_num == $sum){
  echo "<h2> number is amstrong </h2>";
}
else{
  echo "<h2> number is  not amstrong </h2>";
}
?>