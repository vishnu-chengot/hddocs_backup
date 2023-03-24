<?php
echo"Equal operators<br>";
$x =100;
$y ="100";
var_dump($x == $y);
echo"<br>";

echo"Identical operators<br>";
$x =100;
$y ="100";
var_dump($x === $y);
echo"<br>";

echo"Not equal operators<br>";
$x =100;
$y =50;
var_dump($x != $y);
echo"<br>";

echo" Not Identical operators<br>";
$x =100;
$y ="100";
var_dump($x !== $y);
echo"<br>";

echo"Greater than operators<br>";
$x =100;
$y =50;
var_dump($x > $y);
echo"<br>";

echo"Less than operators<br>";
$x =10;
$y =50;
var_dump($x < $y);
echo"<br>";

echo" Greater than or equal tooperators<br>";
$x =60;
$y =50;
var_dump($x >= $y);
echo"<br>";

echo"Less than or equal to operators<br>";
$x =50;
$y =50;
var_dump($x <= $y);
echo"<br>";

echo"	Spaceship operators<br>";
$x =10;
$y =50;
echo "less than = ";
echo $x <=> $y;
echo"<br>";

$x =50;
$y =50;
echo "Equal = ";
echo $x <=> $y;
echo"<br>";

$x =70;
$y =50;
echo "Greater than = ";
echo $x <=> $y;
echo"<br>";



?>