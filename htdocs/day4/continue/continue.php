<?php
#program that will only print the even number between 20
echo "program that will only print the even number between 20<br>";
$x = 1;
while($x <= 20){
  if($x % 2 != 0){
    $x++;
    continue;

  }
  echo "number = $x <br>";
  $x++;
}
echo "program that will only print the odd number between 20<br>";
for($i = 1; $i <=20; $i++){
  if($i % 2 == 0){
    continue;
  }
  echo "number is =$i <br>";
}

echo "program that will fillter veg and non-veg from a menu array<br>";

$food = array("biriyani","dosa","chiken_mandhi","beef_tikka");

foreach ($food as $n){
  if ($n == "dosa"){
    continue;
  }
  echo "Non-veg-menu = $n <br>";
}

?>