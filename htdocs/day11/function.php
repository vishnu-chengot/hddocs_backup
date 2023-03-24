<?php
function is_prime($num){
  $count = 0;
for ($i=2; $i < $num-1; $i++) { 
  if($num % $i == 0){
    $count += 1;
  }

}
if($count == 0){
  return 1;
}
else{
  return 0;
}
}
$sum = 0;
for ($i=2; $i <= 2; $i++){

  if(is_prime($i)){
    $sum +=$i;
    // echo "$i"."<br>";
  }
}

echo "$sum";

// function test($num){
// $x = ($num>20)? 'greater than 30':'less than 30'  ;
// }

?>
