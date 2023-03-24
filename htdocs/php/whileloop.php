
<?php
$sum  =0;
$num1 =153;
while ($num1>0){
  $spilt = $num1%10;
  $sum += $spilt;
  $num1 =$num1/10;
}

echo "<h2>ouptput:-$sum</h2>"
?>

