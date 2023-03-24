<?php
#program will break when the number is both divisible by 5 and 3
echo "program will break when number is both divisible by 5 and 3<br>";
$x = 1;
while ($x <= 20){
if($x % 3 ==0 and $x % 5 ==0){
  break;
}
echo "number is $x <br>";
++$x;
}

echo "program will break when number is divisible by 5<br>";

for($i = 1; $i <= 20; $i++){
  if($i % 5 == 0){
    break;
  }
  echo "number is $i <br>";
}

echo "program will break when course is equal to angular<br>";

$course =array("python","flutter","php","angular","java");

foreach($course as $y){
  if ($y == 'angular'){
    break;
  }
  echo $y."<br>";
}
?>