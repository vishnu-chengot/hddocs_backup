<?php
# logical operators

$x = 100;
$y = 10;
if ($x == 100 && $y == 10){    # and
  echo"<h1>Both condition is true</h1>";
}

$x = 100;
$y = 10;
if ($x == 100 || $y == 50){ #or
  echo"<h1>Either  one condition is true</h1>";
}

$x = 100;
$y = 10;
if ($x == 100 xor $y == 40){ #or
  echo"<h1>Either  one condition is true but not both</h1>";
}

$x = 100;
if ($x !== 40){ #not equal
  echo"<h1>condition is false</h1>";
}
?>